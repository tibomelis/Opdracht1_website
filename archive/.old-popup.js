function video_popup() {
    
    // background
    const base = document.createElement('div');
    base.style.position = 'fixed';
    base.style.top = 0;
    base.style.bottom = 0;
    base.style.left = 0;
    base.style.right = 0;
    base.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    base.style.zIndex = 3;
    base.className = 'popup-window-container';
    base.onclick = close_popup;

    // top right button
    const close_button = document.createElement('div');
    close_button.style.position = 'fixed';
    close_button.style.width = '50px';
    close_button.style.height = '50px';
    close_button.style.backgroundColor = '#000';
    close_button.style.right = '50px';
    close_button.style.top = '50px';
    close_button.innerHTML = 'X';
    close_button.style.fontSize = '32px';
    close_button.style.color = '#fff';
    close_button.style.textAlign = 'center';
    close_button.style.cursor = 'pointer';
    close_button.onclick = close_popup;

    // autoplay doesnt work anymore? :(
    
    /* 
    var video_links = [
        "14OK8_Cpiz0",
        "FBvoU-UiW84",
        "U5Mwc12LtRY",
        "JeXW1Ys1KHg",
        "sO8gOC1cihk",
        "FfEUs-9jAkU",
        "xzcaHa80i2Q",
        "U9t-slLl30E",
        "vqW5ynwFxas"
    ];
    const video = document.createElement('iframe');
    var rand_num = Math.round(Math.random() * (video_links.length - 1));
    var video_link = 'https://www.youtube.com/embed/' + video_links[rand_num] + '?autoplay=1';
    video.src = video_link; 
    */
    const popup_src = document.createElement('img');
    popup_src.src = './../../images/kitchen.png'
    popup_src.style.position = 'absolute';
    popup_src.style.left = '50%';
    popup_src.style.top = '50%';
    popup_src.style.width = '75vw';
    popup_src.style.height = 'auto';
    popup_src.style.transform = 'translate(-50%, -50%)';
    popup_src.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';

    base.appendChild(close_button);
    base.appendChild(popup_src);
    document.body.appendChild(base);
}

function close_popup() {
    document.getElementsByClassName('popup-window-container').item(0).remove();
}