<?php

$nav_lang = array(
    'nl' => array('Thuispagina', 'Over ons', 'Projecten', 'Contact'),
    'en' => array('Homepage', 'About us', 'Projects', 'Contact')
);

$lang = (empty($_SESSION['lang']) ? 'nl' : $_SESSION['lang']);

$nav_items = array(
    ['title' => $nav_lang[$lang][0], 'href' => '/maxserv/Opdracht1_website/index.php'],
    ['title' => $nav_lang[$lang][1], 'href' => '/maxserv/Opdracht1_website/pages/over_ons.php'],
    ['title' => $nav_lang[$lang][2], 'href' => '/maxserv/Opdracht1_website/pages/all_projects.php'],
    ['title' => $nav_lang[$lang][3], 'href' => '/maxserv/Opdracht1_website/pages/contact.php']
);
?>

<div class="p-0 mt-2 container-fluid">
    <div class="pt-4 p-2 lang-sel d-flex justify-content-end">
        <div class="p-1 lang-sel-item justify-self-center text-center lang-select-hide-btn mb-0 font-monospace" onclick="toggle_lang_sel()">
            >
        </div>
        <a class="p-1 lang-sel-item hide-able d-block <?= ($lang == 'nl') ? 'selected' : '' ?> justify-self-center text-center"
           href="/maxserv/Opdracht1_website/pages/change_lang.php?newlang=nl">
            <p class="mb-0 font-monospace">NL</p>
        </a>
        <a class="p-1 lang-sel-item hide-able d-block <?= ($lang == 'en') ? 'selected' : '' ?>  justify-self-center text-center"
           href="/maxserv/Opdracht1_website/pages/change_lang.php?newlang=en">
            <p class="mb-0 font-monospace">EN</p>
        </a>
    </div>
    <header class="d-flex header justify-content-lg-between">
        <img class="ms-3 align-self-start logo-top border" src="<?= $logo; ?>" alt="lorem-logo">
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
                    <a class="ms-1 align-self-center text-black text-center hover-pointer" onclick="toggle_contrast()">Toggle
                        contrast</a>
                </div>
                <div class="d-none d-lg-block">
                    <?php
                    for ($i = 0; $i < sizeof($nav_items); $i++) {
                        $item = '<a class="p-3 mx-0 menu-link';
                        if ($i == 0) {
                            $item .= ' selected';
                        }
                        $item .= '" href="' . $nav_items[$i]['href'] . '">' .
                            $nav_items[$i]['title'] . '</a>';
                        echo $item;
                    }
                    ?>
                    |
                    <a class="ms-1 align-self-center text-black hover-pointer" onclick="toggle_contrast()">Toggle contrast</a>
                </div>
            </nav>
        </div>
    </header>
</div>