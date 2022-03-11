let peerConnections = {},
    wsConnection;
var peerConnectionConfig = {
    'iceServers': [
        {'urls': 'stun:stun.stunprotocol.org:3478'},
        {'urls': 'stun:stun.l.google.com:19302'},
    ]
};
let localUuid = createUUID();
var constraints = {
    video: {
        width: {max: 320},
        height: {max: 240},
        frameRate: {max: 30},
    },
    audio: false,
};


// console.log()


let fullscreenElement = document.querySelector('.toggleFullscreen')
let disableAudio = document.querySelector('.disable--audio');
let disableVideo = document.querySelector('.disable--video');
let enableVideo = document.querySelector('.enable--video');
let muteButton = document.querySelector('.mute--button');
let localStream;
let localVideo = document.getElementById('localVideo')
fullscreenElement.addEventListener('click', function () {
    localVideo.classList.toggle('changeFull')
})

function toggleFullscreen() {
    let elem = document.querySelector("video");

    if (!document.fullscreenElement) {
        elem.requestFullscreen().catch(err => {
            alert(`Error attempting to enable fullscreen mode: ${err.message} (${err.name})`);
        });
    } else {
        document.exitFullscreen();
    }
}

navigator.mediaDevices.getUserMedia(constraints)
    .then(stream => {
        localStream = stream;
        document.getElementById('localVideo').srcObject = stream;
        document.getElementById('localVideoContainer').appendChild(makeLabel(localDisplayName))


    }).catch(err => {
    console.log(err);
}).then(() => {
    disableAudio.addEventListener('click', () => {
        console.log(localStream.getAudioTracks())
        localStream.getAudioTracks()[0].enabled = !(localStream.getAudioTracks()[0].enabled)
        disableAudio.classList.toggle('visible')
    })

    if (localDisplayName) {
        wsConnection = io.connect('wss://ws.visioroom.com:8080', {
            transports: ['websocket'],
        })
    }
    console.log(localStorage.getItem('room'))
    wsConnection.emit('join', localStorage.getItem('room'))
    wsConnection.emit('video-message', {'displayName': localDisplayName, 'uuid': localUuid, 'dest': 'all'});
    wsConnection.on('video-message', function (evt) {
        gotMessageFromServer(evt)
    });
}).catch(err => console.log(err));

disableVideo.addEventListener('click', () => {
    document.getElementById('localVideo').pause();
    disableVideo.classList.add('hidden')
    enableVideo.classList.remove('hidden')
    enableVideo.classList.add('visible')
})
enableVideo.addEventListener(('click'), () => {
    document.getElementById('localVideo').play();
    disableVideo.classList.remove('hidden')
    enableVideo.classList.add('hidden')
    enableVideo.classList.remove('visible')
})
//
// function getFullscreenElement() {
//     return document.fullscreenElement
//         || document.webkitFullscreenElement
//         || document.mozFullscreenElement
//         || document.msFullScreenElement;
// }
document.addEventListener("dblclick", () => {
    document.documentElement.requestFullscreen().catch(() => {
        console.log(e)
    });
});

function gotMessageFromServer(message) {
    // console.log(message);
    var signal = message;
    var peerUuid = signal.uuid;

    // Ignore messages that are not for us or from ourselves
    if (peerUuid == localUuid || (signal.dest != localUuid && signal.dest != 'all')) return;
    if (signal.displayName && signal.dest == 'all') {
        // set up peer connection object for a newcomer peer
        setUpPeer(peerUuid, signal.displayName);
        wsConnection.emit('video-message', {'displayName': localDisplayName, 'uuid': localUuid, 'dest': peerUuid});

    } else if (signal.displayName && signal.dest == localUuid) {
        // initiate call if we are the newcomer peer
        setUpPeer(peerUuid, signal.displayName, true);
    } else if (signal.sdp) {
        peerConnections[peerUuid].pc.setRemoteDescription(new RTCSessionDescription(signal.sdp)).then(function () {
            // Only create answers in response to offers
            if (signal.sdp.type == 'offer') {
                peerConnections[peerUuid].pc.createAnswer().then(description => createdDescription(description, peerUuid)).catch(err => console.log(err));
            }
        }).catch(err => console.log(err));

    } else if (signal.ice) {
        peerConnections[peerUuid].pc.addIceCandidate(new RTCIceCandidate(signal.ice)).catch(err => console.log(err));
    }
}

function setUpPeer(peerUuid, displayName, initCall = false) {
    peerConnections[peerUuid] = {'displayName': displayName, 'pc': new RTCPeerConnection(peerConnectionConfig)};
    peerConnections[peerUuid].pc.onicecandidate = event => gotIceCandidate(event, peerUuid);
    peerConnections[peerUuid].pc.ontrack = event => gotRemoteStream(event, peerUuid);
    peerConnections[peerUuid].pc.oniceconnectionstatechange = event => checkPeerDisconnect(event, peerUuid);
    localStream.getTracks().forEach(function (track) {
        peerConnections[peerUuid].pc.addTrack(track, localStream);
    });
    if (initCall) {
        peerConnections[peerUuid].pc.createOffer().then(description => createdDescription(description, peerUuid)).catch(err => console.log(err));
    }
}

function gotIceCandidate(event, peerUuid) {
    if (event.candidate != null) {
        wsConnection.emit('video-message', {'ice': event.candidate, 'uuid': localUuid, 'dest': peerUuid});
    }
}

function createdDescription(description, peerUuid) {
    // console.log(`got description, peer ${peerUuid}`);
    peerConnections[peerUuid].pc.setLocalDescription(description).then(function () {
        wsConnection.emit('video-message', {
            'sdp': peerConnections[peerUuid].pc.localDescription,
            'uuid': localUuid,
            'dest': peerUuid
        });
    }).catch(err => console.log(err));
}

function gotRemoteStream(event, peerUuid) {
    // console.log(`got remote stream, peer ${peerUuid}`);
    //assign stream to new HTML video element
    var vidElement = document.createElement('video');
    vidElement.setAttribute('autoplay', '');
    vidElement.setAttribute('muted', '');
    vidElement.srcObject = event.streams[0];

    var vidContainer = document.createElement('div');
    vidContainer.setAttribute('id', 'remoteVideo_' + peerUuid);
    vidContainer.setAttribute('class', 'videoContainer');
    vidContainer.appendChild(vidElement);
    vidContainer.appendChild(makeLabel(peerConnections[peerUuid].displayName));

    document.getElementById('videos').appendChild(vidContainer);
    updateLayout();
}

function checkPeerDisconnect(event, peerUuid) {
    const state = peerConnections[peerUuid].pc.iceConnectionState;
    // console.log(`connection with peer ${peerUuid} ${state}`);
    if (state === "failed" || state === "closed" || state === "disconnected") {
        delete peerConnections[peerUuid];
        document.getElementById('videos').removeChild(document.getElementById('remoteVideo_' + peerUuid));
        updateLayout();
    }
}

function updateLayout() {
    var rowHeight = '98vh';
    var colWidth = '98vw';

    var numVideos = Object.keys(peerConnections).length + 1; // add one to include local video

    if (numVideos > 1 && numVideos <= 4) { // 2x2 grid
        rowHeight = '48vh';
        colWidth = '48vw';
    } else if (numVideos > 4) { // 3x3 grid
        rowHeight = '32vh';
        colWidth = '32vw';
    }

    document.documentElement.style.setProperty(`--rowHeight`, rowHeight);
    document.documentElement.style.setProperty(`--colWidth`, colWidth);
}

function makeLabel(label) {
    var vidLabel = document.createElement('div');
    vidLabel.appendChild(document.createTextNode(label));
    vidLabel.setAttribute('class', 'videoLabel');
    return vidLabel;
}

function createUUID() {
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
    }
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
}

let text = document.querySelector('input');
let send = document.getElementById('send');
let messages = document.querySelector('.messages');

send.addEventListener("click", (e) => {
  if (text.value != ''){
      recieveSendMessage()
  }
});
text.addEventListener("keypress", (e) => {
    if (e.key === "Enter" && text.value !== '') {
        recieveSendMessage()
    }
});

function recieveSendMessage(){
        wsConnection.emit("chat-message", text.value);
        text.value = "";

        wsConnection.emit("chat-message", text.value);
        text.value = "";


    wsConnection.on('chat-message', data => {
        let div = document.createElement('li');
        console.log( data)
        div.innerText = data;
        messages.append(div)
    });
}
// send.addEventListener("click", (e) => {
//     if (text.value == '') return
//     if (text.value) {
//         wsConnection.emit('chat-message', text.value);
//         text.value = " ";
//     }
// })


//     wsConnection.on('chat-message', data => {
//         let div = document.createElement('div');
//         div.innerText = data;
//         messages.append(div)
// });
// document.addEventListener('keypress', function (e) {
//
//     console.log('send')
//     if (e.code === 'Enter') {
//         wsConnection.emit('chat-message', text.value)
//         text.value = ''
//     }
// })
// let list = document.querySelector('.chat-message')
// wsConnection.on('chat-message', data => {
//     let li = document.createElement('li');
//     li.innerText = data
//     list.append(li)
// })

// input.addEventListener('input', function (e) {
//
//
//     if (input.value != '') {
//         wsConnection.emit('typing', wsConnection.id + ' is typing')
//
//         wsConnection.on('typing', data => {
//             list.innerText = data
//         })
//     } else {
//         wsConnection.emit('stopTyping', '')
//
//         wsConnection.on('stopTyping', () => {
//             list.innerText = ''
//         })
//     }
//
//
// })
// send.addEventListener("click", (e) => {
//     e.preventDefault()
//     // console.log(text.value)
//     if (text.value) {
//         wsConnection.emit("chat-message", text.value);
//         text.value = "";
//     }
//     wsConnection.on('chat-message', data => {
//         console.log(data)
//     })
// });
// text.addEventListener("keydown", (e) => {
//     if (e.key === "Enter" && text.value.length !== 0) {
//         wsConnection.emit("chat-message", text.value);
//         text.value = "";
//     }
// });

