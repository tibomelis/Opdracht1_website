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
$hide_projects_txt = 'VERBERG PROJECTEN';
$footer_nav_links = [
    ['txt' => 'Inspiratie', 'links' =>
        [
            ['txt' => 'Medium', 'link' => 'https://maxserv.com'],
            ['txt' => 'Designerdepot', 'link' => 'https://maxserv.com'],
            ['txt' => 'Portfolio', 'link' => 'https://maxserv.com']
        ]
    ],
    [
        'txt' => 'Service', 'links' =>
        [
            ['txt' => 'Over ons', 'link' => '../../pages/about_us.php'],
            ['txt' => 'Contact', 'link' => '../../pages/contact.php'],
            ['txt' => 'Servicepunten', 'link' => 'https://maxserv.com']
        ]
    ],
    [
        'txt' => 'Informatie', 'links' =>
        [
            ['txt' => 'Github', 'link' => 'https://maxserv.com'],
            ['txt' => 'Atlassian', 'link' => 'https://maxserv.com'],
            ['txt' => 'Slack', 'link' => 'https://maxserv.com']
        ]
    ]
];

$bottom_page_links = ['Voorwaarden', 'Siteplan', 'Afmelden'];

$back_button_txt = 'TERUG';

function add_project($src, $name, $price, $href)
{
    global $projects;
    $projects[] = ['src' => $src, 'name' => $name, 'price' => $price, 'href' => $href];
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
add_project('/images/projects/proj_9.png', '8', '2.000,-', 'https://maxserv.com');
add_project('/images/projects/proj_10.png', '8', '4.500,-', 'https://maxserv.com');
add_project('/images/projects/proj_11.png', '8', '2.300,-', 'https://maxserv.com');
add_project('/images/projects/proj_12.png', '8', '4.420,-', 'https://maxserv.com');
add_project('/images/projects/proj_13.png', '8', '7.300,-', 'https://maxserv.com');
add_project('/images/projects/proj_14.png', '8', '3.300,-', 'https://maxserv.com');
add_project('/images/projects/proj_15.png', '8', '4.430,-', 'https://maxserv.com');
add_project('/images/projects/proj_16.png', '8', '5.999,-', 'https://maxserv.com');
add_project('/images/projects/proj_17.png', '8', '4.600,-', 'https://maxserv.com');
add_project('/images/projects/proj_18.png', '8', '5.450,-', 'https://maxserv.com');

$contact_form = [
    'requiredtxt' => '* = verplicht',

    'fnametxt' => 'Uw naam:',
    'fnameplh' => '* Voornaam',
    'lnameplh' => 'Achternaam',

    'emailtxt' => 'Uw mail-addres: ',
    'emailexample' => '* voorbeeld@voorbeeld.com',

    'phonetxt' => 'Uw telefoonnummer',
    'phoneplh' => '* 0123456789',

    'summarytxt' => 'Korte samenvatting van reden voor contact: ',
    'summaryplaceholder' => '* 5-50 karakters',

    'send_btn' => 'Versturen!'
];

$nav_lang = array(
    'en' => array('Homepage', 'About us', 'Projects', 'Contact')
);
$curpage = (empty($_SESSION['curpage']) ? 'homepage' : $_SESSION['curpage']);
$nav_items = array(
    ['title' => 'Thuispagina', 'href' => '/index.php', 'selected' => ($curpage == 'homepage')],
    ['title' => 'Over ons', 'href' => '/pages/about_us.php', 'selected' => ($curpage == 'over_ons')],
    ['title' => 'Projecten', 'href' => '/pages/all_projects.php', 'selected' => ($curpage == 'all_projects')],
    ['title' => 'Contact', 'href' => '/pages/contact.php', 'selected' => ($curpage == 'contact')]
);