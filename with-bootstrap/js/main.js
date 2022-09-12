const toggle = (input) => {elem = input.classList; elem.contains('d-block') ? elem.replace('d-block', 'd-none') : elem.replace('d-none', 'd-block')}

function toggle_contrast() {
    var _body = document.body.classList
    if (_body.contains('custom-bg-darkgray')) {
        _body.remove('custom-bg-darkgray')
    } else {
        _body.add('custom-bg-darkgray')
    }
    
}

function show_hide() {
    var _popup_win = document.getElementsByClassName('popup-container').item(0)
    toggle(_popup_win)
}

var elements = document.getElementsByClassName('popup-trigger');

for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', show_hide);
}