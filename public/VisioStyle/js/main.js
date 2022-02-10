let callModalBtn = document.querySelector('.quick__link');
let modalOverlay = document.querySelector('.overlay');
let modalWindow = document.querySelector('.modal');
let closeModalBtn = document.querySelector('.modal__header-close')

if (callModalBtn) {
    callModalBtn.addEventListener('click', () => {
        modalOverlay.classList.add('active');
        modalWindow.classList.add('active')


        /*generate link */

        let randomSymbols = Math.random().toString(36).slice(9) + '-' + Math.random().toString(36).slice(9) + '-' + Math.random().toString(36).slice(8);
        generatedLink.textContent = 'test.visioroom.com/' +  randomSymbols
    })
}
if (closeModalBtn) {
    closeModalBtn.addEventListener('click', () => {
        modalOverlay.classList.remove('active');
        modalWindow.classList.remove('active')
    })
}

if (modalOverlay) {
    modalOverlay.addEventListener('click', () => {
        modalOverlay.classList.remove('active')
        modalWindow.classList.remove('active')
    })
}
/*copy link*/

let copyLinkBtn = document.querySelector('.copy--btn')
let generatedLink = document.querySelector('.generated--link')

if (copyLinkBtn) {
    copyLinkBtn.addEventListener('click', () => {
        navigator.clipboard.writeText(generatedLink.textContent)
        copyLinkBtn.textContent = 'Copied!'
        setTimeout(() => {
            copyLinkBtn.textContent = 'Copy'
        }, 3000)
    })

}
/*notification button and list */

let showNotificationsBtn = document.querySelector('.notification__btn')
let notificationList = document.querySelector('.incoming__notifications-list')

if (showNotificationsBtn) {

    showNotificationsBtn.addEventListener('click', () => {
        notificationList.classList.toggle('active')

    })

}

/*discussion timer */
window.addEventListener('load', () => {
    let timer = document.querySelector('.discussion__chat-time p')
    if (timer) {


        let hours = 0;
        let minutes = 0;
        let seconds = 0;
        setInterval(() => {
            seconds++
            if (seconds == 60) {
                seconds = 0
                minutes++
                if (minutes == 60) {
                    minutes = 0
                    hours++
                    if (hours == 24) {
                        return
                    }
                }

            }
            timer.textContent = (minutes < 10 ? '0' + minutes : minutes) + ' : ' + (seconds < 10 ? '0' + seconds : seconds)
            if (minutes == 60) {
                timer.textContent = hours + ':' + minutes + ' : ' + seconds
            }
        }, 1000)
    }
})

/*show chat */


let chatBtn = document.querySelector('.discussion__chat-show')
let chatContainer = document.querySelector('.discussion__chat')
let chatCloseBtn = document.querySelector('.discussion__chat-header img')
let chatHistoryNotification = document.querySelector('.discussion__chat-notify')
let chatHistoryNotificationClose = document.querySelector('.notify-close')
if (chatBtn) {
    chatBtn.addEventListener('click', () => {
        chatContainer.classList.add('active')
    })
    chatCloseBtn.addEventListener('click', () => {
        chatContainer.classList.remove('active')
    })

    chatHistoryNotificationClose.addEventListener('click', () => {
        chatHistoryNotification.classList.add('showing')
    })
}