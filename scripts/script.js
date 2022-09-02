/*
    Auteur:         Tibo Melis
    Omschrijving:   Een opdracht van MaxServ
    Datum:          9/1/2022    
    Bestand:        javascript code voor de website
*/

function burgermenu() {
    const menu_links = document.getElementById('menu-links');
    const menu_btn = document.getElementById('mobile-menu-btn');
    const header = document.querySelector('header');

    if (menu_links.style.display === "flex") {
        menu_links.style.display = "none";

        header.style.justifyContent = 'space-around';
        
        menu_btn.style.width = '50vw';
        menu_btn.style.transition = 'all 1s ease';
    } else {
        menu_links.style.display = "flex";

        header.style.justifyContent = 'normal';
        
        menu_btn.style.width = 'fit-content';
        menu_btn.style.transition = 'all 1s ease';
    }
    
}