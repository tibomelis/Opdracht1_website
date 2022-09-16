<?php

$nav_lang = array(
    'nl' => array('Thuispagina', 'Over ons', 'Projecten', 'Contact'),
    'en' => array('Homepage', 'About us', 'Projects', 'Contact')
);

$lang = (empty($_SESSION['lang']) ? 'nl' : $_SESSION['lang']);
$curpage = (empty($_SESSION['curpage']) ? 'homepage' : $_SESSION['curpage']);

$nav_items = array(
    ['title' => $nav_lang[$lang][0], 'href' => '/index.php', 'selected' => ($curpage == 'homepage')],
    ['title' => $nav_lang[$lang][1], 'href' => '/pages/over_ons.php', 'selected' => ($curpage == 'over_ons')],
    ['title' => $nav_lang[$lang][2], 'href' => '/pages/all_projects.php', 'selected' => ($curpage == 'all_projects')],
    ['title' => $nav_lang[$lang][3], 'href' => '/pages/contact.php', 'selected' => ($curpage == 'contact')]
);

$lang_sel_display = (empty($_SESSION['lang_sel_display']) ? 'block' : $_SESSION['lang_sel_display']);
$lang_sel_toggler = (empty($_SESSION['lang_sel_toggler']) ? '>' : $_SESSION['lang_sel_toggler']);
$contrast_active = (empty($_SESSION['contrast_active']) ? false : $_SESSION['contrast_active']);
?>

<div class="p-0 mt-2 container-fluid">
    <div class="pt-4 p-2 lang-sel d-flex justify-content-end">
        <a class="p-1 lang-sel-item justify-self-center text-center lang-select-hide-btn mb-0 font-monospace"
           href="/pages/toggle.php?toggle=lang_sel">
            <?= $lang_sel_toggler ?>
        </a>
        <a class="p-1 lang-sel-item hide-able d-<?= $lang_sel_display ?> <?= ($lang == 'nl') ? 'selected' : '' ?>
        justify-self-center text-center"
           href="/pages/change_lang.php?newlang=nl">
            <p class="mb-0 font-monospace">NL</p>
        </a>
        <a class="p-1 lang-sel-item hide-able d-<?= $lang_sel_display ?> <?= ($lang == 'en') ? 'selected' : '' ?>
        justify-self-center text-center"
           href="/pages/change_lang.php?newlang=en">
            <p class="mb-0 font-monospace">EN</p>
        </a>
    </div>
    <header class="d-flex header justify-content-lg-between">
        <img class="ms-5 align-self-start logo-top border" src="<?= $logo; ?>" alt="lorem-logo">
        <div class="d-flex flex-row">
            <nav class="align-self-center mt-5 mx-auto mx-lg-0">
                <div class="d-flex d-lg-none">
                    <div class="ms-1 dropdown">
                        <button class="btn dropdown-toggle show" type="button" data-bs-toggle="dropdown"
                                aria-expanded="true">
                            Menu
                        </button>
                        <ul class="dropdown-menu" data-popper-placement="bottom-start">
                            <?php
                            for ($i = 0; $i < sizeof($nav_items); $i++) {
                                echo '<li><a class="dropdown-item" href="' . $nav_items[$i]['href'] . '">' . $nav_items[$i]['title'] . '</a></li>';
                            }

                            ?>
                        </ul>
                    </div>
                    <a class="ms-1 align-self-center text-black hover-pointer contrast-toggler-<?= ($contrast_active ? 'black' : 'white') ?>"
                       href="/pages/toggle.php?toggle=contrast"></a>
                </div>
                <div class="d-none d-lg-block">
                    <?php
                    for ($i = 0; $i < sizeof($nav_items); $i++) {
                        $item = '<a class="p-3 mx-0 menu-link';
                        if ($nav_items[$i]['selected']) {
                            $item .= ' selected';
                        }
                        $item .= '" href="' . $nav_items[$i]['href'] . '">' .
                            $nav_items[$i]['title'] . '</a>';
                        echo $item;
                    }
                    ?>
                    |
                    <a class="ms-1 align-self-center text-black hover-pointer contrast-toggler-<?= ($contrast_active ? 'black' : 'white')
                    ?>" href="/pages/toggle.php?toggle=contrast"></a>
                </div>
            </nav>
        </div>
    </header>
</div>