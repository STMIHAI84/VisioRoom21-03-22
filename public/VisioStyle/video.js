// let localDisplayName = '{{app.user}}'
// localStorage.setItem('user', localDisplayName)
let peerConnections = {},
    wsConnection;
var peerConnectionConfig = {
    'iceServers': [
        { 'urls': 'stun:stun.stunprotocol.org:3478' },
        { 'urls': 'stun:stun.l.google.com:19302' },
    ]
};
let localUuid = createUUID();
var constraints = {
    video: {
        width: { max: 320 },
        height: { max: 240 },
        frameRate: { max: 30 },
    },
    audio: true,
};

navigator.mediaDevices.getUserMedia(constraints)
    .then(stream => {
        localStream = stream;
        document.getElementById('localVideo').srcObject = stream;
        document.getElementById('localVideoContainer').appendChild(makeLabel(localDisplayName));
    }).catch(err => {
    console.log(err);
}).then(() => {
    if(localDisplayName){
        wsConnection = io.connect('wss://ws.visioroom.com:8080', {
            transports: ['websocket'],
        })
    }
    wsConnection.emit('video-message', { 'displayName': localDisplayName, 'uuid': localUuid, 'dest': 'all' });
    wsConnection.on('video-message', function(evt) {
        gotMessageFromServer(evt)
    });


}).catch(err => console.log(err));

function gotMessageFromServer(message) {
    console.log(message);
    var signal = message;
    var peerUuid = signal.uuid;

    // Ignore messages that are not for us or from ourselves
    if (peerUuid == localUuid || (signal.dest != localUuid && signal.dest != 'all')) return;

    if (signal.displayName && signal.dest == 'all') {
        // set up peer connection object for a newcomer peer
        setUpPeer(peerUuid, signal.displayName);
        wsConnection.emit('video-message', { 'displayName': localDisplayName, 'uuid': localUuid, 'dest': peerUuid });

    } else if (signal.displayName && signal.dest == localUuid) {
        // initiate call if we are the newcomer peer
        setUpPeer(peerUuid, signal.displayName, true);
    } else if (signal.sdp) {
        peerConnections[peerUuid].pc.setRemoteDescription(new RTCSessionDescription(signal.sdp)).then(function() {
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
    peerConnections[peerUuid] = { 'displayName': displayName, 'pc': new RTCPeerConnection(peerConnectionConfig) };

    peerConnections[peerUuid].pc.onicecandidate = event => gotIceCandidate(event, peerUuid);
    peerConnections[peerUuid].pc.ontrack = event => gotRemoteStream(event, peerUuid);
    peerConnections[peerUuid].pc.oniceconnectionstatechange = event => checkPeerDisconnect(event, peerUuid);

    localStream.getTracks().forEach(function(track) {
        peerConnections[peerUuid].pc.addTrack(track, localStream);
    });

    if (initCall) {
        peerConnections[peerUuid].pc.createOffer().then(description => createdDescription(description, peerUuid)).catch(err => console.log(err));
    }
}

function gotIceCandidate(event, peerUuid) {
    if (event.candidate != null) {
        wsConnection.emit('video-message', { 'ice': event.candidate, 'uuid': localUuid, 'dest': peerUuid });
    }
}

function createdDescription(description, peerUuid) {
    console.log(`got description, peer ${peerUuid}`);
    peerConnections[peerUuid].pc.setLocalDescription(description).then(function() {
        wsConnection.emit('video-message', { 'sdp': peerConnections[peerUuid].pc.localDescription, 'uuid': localUuid, 'dest': peerUuid });
    }).catch(err => console.log(err));
}

function gotRemoteStream(event, peerUuid) {
    console.log(`got remote stream, peer ${peerUuid}`);
    //assign stream to new HTML video element
    var vidElement = document.createElement('video');
    vidElement.setAttribute('autoplay', 'autoplay');
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
    var state = peerConnections[peerUuid].pc.iceConnectionState;
    console.log(`connection with peer ${peerUuid} ${state}`);
    if (state === "failed" || state === "closed" || state === "disconnected") {
        delete peerConnections[peerUuid];
        document.getElementById('videos').removeChild(document.getElementById('remoteVideo_' + peerUuid));
        updateLayout();
    }
}

function updateLayout() {
    // update CSS grid based on number of diplayed videos
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