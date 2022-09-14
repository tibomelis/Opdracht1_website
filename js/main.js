const toggle = (input) => {
    elem = input.classList;
    elem.contains('d-block') ? elem.replace('d-block', 'd-none') : elem.replace('d-none', 'd-block')
}

function toggle_contrast() {
    var _body = document.body.classList
    if (_body.contains('custom-bg-darkgray')) {
        _body.remove('custom-bg-darkgray')
    } else {
        _body.add('custom-bg-darkgray')
    }

}

function findSibling(curelem, clsname) {
    if (curelem.parentElement.classList.contains('popup-trigger')) {
        if (curelem.classList.contains(clsname)) {
            return curelem;
        } else {
            return findSibling(curelem.previousSibling, clsname);
        }
    } else {
        return findSibling(curelem.parentNode, clsname);
    }
}

function show(self) {
    var _popup_win = document.getElementsByClassName('popup-container').item(0)
    var _popup_img = document.getElementsByClassName('popup-img').item(0)
    var _clicked = self.target
    _popup_img.src = findSibling(_clicked, 'project-img').src
    toggle(_popup_win)
}

function hide() {
    toggle(document.getElementsByClassName('popup-container').item(0))
}

var elements = document.getElementsByClassName('hover-img');

for (let i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', show);
}