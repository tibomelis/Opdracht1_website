<?php
// boolean
// session_start();
$_SESSION["contrast_active"] = (empty($_SESSION["contrast_active"]) ? false : $_SESSION["contrast_active"]);

// Meertalige navigatie
$nav_lang = array(
    'nl' => array('Thuispagina', 'Over ons', 'Projecten', 'contact'),
    'en' => array('Homepage', 'About us', 'Projects', 'Contact')
);

/*
$lang = 'nl';
// Hoofdnavigatie
$nav =
"
<div class='d-flex d-lg-none'>
    <div class='ms-1 dropdown'>
        <button class='btn dropdown-toggle show' type='button' data-bs-toggle='dropdown' aria-expanded='true'>
        Menu
        </button>
        <ul class='dropdown-menu' data-popper-placement='bottom-start'>
        <li><a class='dropdown-item' href='https://maxserv.com'>".$nav_lang[$lang][0]."</a></li>
        <li><a class='dropdown-item' href='https://maxserv.com'>".$nav_lang[$lang][1]."</a></li>
        <li><a class='dropdown-item' href='https://maxserv.com'>".$nav_lang[$lang][2]."</a></li>
        <li><a class='dropdown-item' href='https://maxserv.com'>".$nav_lang[$lang][3]."</a></li>
        </ul>
    </div>
    <a class='ms-1 align-self-center text-black text-center hover-pointer' onclick='toggle_contrast()'>Toggle contrast</a>
</div>
";
*/


// Logo header en footer
$logo = '/Opdracht1_website/images/lorem-logo.png';

//echo "<img src='$logo' alt='Lorem Logo'>";


// [x][0] title [x][1][y] = link
//$footer_nav = [
//    ['Inspiratie', ['Medium', 'Designerdepot', 'Portfolio']],
//    ['Service', ['Over ons', 'Contact', 'Servicepunten']],
//    ['Informatie', ['Github', 'Atlassian', 'Slack']]
//];
//function footer_link($content) {return "<a class='text-body' href='https://maxserv.com'>$content</a>";}
//function footer_link_title($content) {return "<p class='bold'>$content</p>";}

/*
foreach ($footer_nav as $column) {
    echo footer_link_title($column[0]);
    foreach ($column[1] as $link) {
        echo footer_link($link);
    }
}
*/

// "Ontdek al onze projecten" met bijbehorende tekst
$intro_title = 'Ontdek al onze projecten';
$intro_txt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique cumque quaerat deleniti veniam qui odit porro, officia vero tempore nobis laboriosam veritatis. Perspiciatis eveniet cumque similique sunt tenetur ullam ut laboriosam maiores? Debitis, ipsum suscipit perferendis a illo inventore deserunt.';

// "Meer informatie nodig?" met bijbehorende tekst
$more_inf_title = 'Meer informatie nodig?';
$more_inf_txt = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus maiores velit et pariatur sequi laborum, adipisci expedita eum ea earum magnam fuga quis voluptatum, perferendis nam. Assumenda saepe eveniet ab? Debitis quaerat, blanditiis itaque tempore sapiente quam, deserunt, ipsum non accusantium nulla dignissimos sit quisquam architecto possimus molestiae voluptatum delectus assumenda nostrum natus incidunt dicta doloribus eum! Sed, praesentium dicta. Cumque quia, asperiores sint dolorum fugiat, ab commodi dolor expedita voluptatum repellendus, assumenda similique. Voluptatibus quisquam est magni, ipsum eaque unde quam possimus et deserunt, temporibus nulla itaque, voluptates numquam. Mollitia, omnis rem tempore amet nobis error voluptatem sit praesentium sed eos ut quaerat, unde et eligendi obcaecati quisquam dicta consequuntur voluptatum, assumenda explicabo cumque itaque optio quia! Expedita, officiis. Enim cupiditate sit corporis non laboriosam ipsam rem facilis deserunt, nam odit placeat, assumenda dolore, praesentium nihil ullam beatae magnam. Suscipit nulla nisi quod quaerat quos natus qui libero tenetur?';
// "Het WAUW effect" met bijbehorende tekst
$wow_effect_title = 'Het WAUW effect';
$wow_effect_txt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, debitis unde autem dolorem minima aspernatur culpa quis molestias sunt eligendi dolorum voluptatibus laudantium recusandae. Aliquam assumenda fugiat suscipit libero laboriosam.';
// "Snelle en kwaliteitsvolle projecten" met bijbehorende tekst
$quality_proj_title = 'Snelle en kwaliteitsvolle projecten';
$quality_proj_txt = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae voluptate hic labore neque ullam pariatur! Maiores cupiditate inventore harum, aliquam doloribus maxime reprehenderit consequatur voluptate, quas consectetur deleniti libero voluptatem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, perspiciatis?';
// "Op zoek naar ideeën voor uw website?" met bijbehorende tekst en linkje
$ideas_title = 'Op zoek naar ideeën voor uw website?';
$ideas_txt = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo facilis hic quam omnis sint, eaque ex autem nam sunt! Porro laudantium libero enim tempore aperiam aspernatur. <a href="https://maxserv.com" class="do-test-link">Doe de test</a> en ontdek alle opties.';


/*


*/

$copyright_txt = 'Copyright &copy; 2018';
$load_projects_txt = 'Meer projecten laden';