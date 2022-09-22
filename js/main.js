const toggle = (input) => {
    let elem = input.classList;
    elem.contains('d-block') ? elem.replace('d-block', 'd-none') : elem.replace('d-none', 'd-block')
}

function navigate(elem) {
    if (elem.classList.contains('hover-img')) {
        return elem.getElementsByClassName('project-img').item(0).src
    } else {
        return navigate(elem.parentElement)
    }
}

function show_popup(self) {
    let _popup_win = document.getElementsByClassName('popup-container').item(0)
    let _popup_img = document.getElementsByClassName('popup-img').item(0)
    _popup_img.src = navigate(self.target)
    toggle(_popup_win)
}

function hide_popup() {
    toggle(document.getElementsByClassName('popup-container').item(0))
}

const hover_img_trigger = document.getElementsByClassName('hover-img');

for (let i = 0; i < hover_img_trigger.length; i++) {
    hover_img_trigger[i].addEventListener('click', show_popup);
}

const menuBtn = document.querySelector('.menu-btn');
const menuLinks = document.querySelector('.mobile-menu-popup')
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        menuLinks.classList.add('show');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        menuLinks.classList.remove('show');
        menuOpen = false;
    }
})