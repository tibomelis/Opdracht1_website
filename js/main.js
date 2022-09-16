const toggle = (input) => {
    let elem = input.classList;
    elem.contains('d-block') ? elem.replace('d-block', 'd-none') : elem.replace('d-none', 'd-block')
}

function toggle_contrast() {
    let _body = document.body.classList
    if (_body.contains('custom-bg-darkgray')) {
        _body.remove('custom-bg-darkgray')
    } else {
        _body.add('custom-bg-darkgray')
    }

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

function toggle_lang_sel() {
    let items = document.querySelectorAll('.lang-sel .hide-able')
    let toggler = document.getElementsByClassName('lang-select-hide-btn').item(0)
    if (items[0].classList.contains('d-none')) {
        toggler.textContent = '>'
        for (let i = 0; i < items.length; i++) {
            items[i].classList.replace('d-none', 'd-block')
        }
    } else {
        toggler.textContent = '<'
        for (let i = 0; i < items.length; i++) {
            items[i].classList.replace('d-block', 'd-none')
        }
    }

}