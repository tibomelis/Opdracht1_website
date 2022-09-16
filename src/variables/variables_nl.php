<?php
$homepage = '/index.php';
// Logo header en footer
$logo = '/images/lorem-logo.png';

// "Ontdek al onze projecten" met bijbehorende tekst
$intro_title = 'Ontdek al';
$intro_title_boldpart = 'onze projecten';
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

$copyright_txt = 'Alle rechten voorbehouden';
$load_projects_txt = 'MEER PROJECTEN LADEN';

$footer_nav_links = [
    ['Inspiratie', ['Medium', 'Designerdepot', 'Portfolio']],
    ['Service', ['Over ons', 'Contact', 'Servicepunten']],
    ['Informatie', ['Github', 'Atlassian', 'Slack']]
];

$bottom_page_links = ['Voorwaarden', 'Siteplan', 'Afmelden'];

$back_button_txt = 'TERUG';

function add_project($src, $name, $price, $href)
{
    global $projects;
    $projects[] = ['src' => $src, 'name' => $name, 'price' => $price, 'href' => $href];
}

function get_project($i)
{
    global $projects;
    return get_project_container($i);
}

function getPriceTag($price)
{
    return "
<div class='pricetag-container'>
    <div class='top'>
      <div class='p-1'>PRIJS</div>
      <div class='price p-1'>$price</div>
    </div>
    <div class='bottom'>
      <div class='left'></div>
      <div class='right'></div>
    </div>
</div>";
}

function get_project_container($i)
{
    global $projects;
    $_src = $projects[$i]['src'];
    $_price_tag = getPricetag($projects[$i]['price']);
    return "<figure class='hover-img p-0'>
                <a class='popup-trigger'>
                    <img class='img-fluid project-img' src='$_src' alt='no image? reload page'>
                    <figcaption>
                        <p>Ultimate Design <span class='circle-icon'></span></p>
                    </figcaption>
                    $_price_tag
                </a>
            </figure>";
}

$projects = [];
add_project('/images/projects/proj_1.png', '1', '3.500,-', 'https://maxserv.com');
add_project('/images/projects/proj_2.png', '2', '5.450,-', 'https://maxserv.com');
add_project('/images/projects/proj_3.png', '3', '2.000,-', 'https://maxserv.com');
add_project('/images/projects/proj_4.png', '4', '7.450,-', 'https://maxserv.com');
add_project('/images/projects/proj_5.png', '5', '5.450,-', 'https://maxserv.com');
add_project('/images/projects/proj_6.png', '6', '7.000,-', 'https://maxserv.com');
add_project('/images/projects/proj_7.png', '7', '3.450,-', 'https://maxserv.com');
add_project('/images/projects/proj_8.png', '8', '5.400,-', 'https://maxserv.com');