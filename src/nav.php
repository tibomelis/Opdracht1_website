<?php
$lang = (empty($_SESSION['lang']) ? 'nl' : $_SESSION['lang']);
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
        <a class="p-1 lang-sel-item hide-able d-<?= $lang_sel_display ?> <?= ($lang == 'nl') ? 'selected' : '' ?> justify-self-center
        text-center" href="/pages/change_lang.php?newlang=nl">
            <p class="mb-0 font-monospace">NL</p>
        </a>
        <a class="p-1 lang-sel-item hide-able d-<?= $lang_sel_display ?> <?= ($lang == 'en') ? 'selected' : '' ?>
        justify-self-center text-center"
           href="/pages/change_lang.php?newlang=en">
            <p class="mb-0 font-monospace">EN</p>
        </a>
    </div>
    <header class="d-flex header justify-content-lg-between">
        <img class="ms-lg-5 ms-2 align-self-start logo-top border" src="<?= $logo; ?>" alt="lorem-logo">
        <div class="d-flex flex-row ms-auto">
            <nav class="align-self-center mt-5">
                <!-- mobile menu -->

                <!-- desktop menu -->
                <div class="d-none d-lg-block">
                    <?php foreach ($nav_items as $nav_item): ?>
                        <a class="p-3 mx-0 menu-link <?= ($nav_item['selected'] ? ' selected' : '') ?>"
                           href="<?= $nav_item['href'] ?>"><?= $nav_item['title'] ?></a>
                    <?php endforeach; ?>
                    |
                </div>
            </nav>
            <a class="align-self-end p-4 text-black hover-pointer contrast-toggler-<?= ($contrast_active ? 'black' : 'white') ?>"
               href="/pages/toggle.php?toggle=contrast"></a>
            <div class="align-self-end d-flex d-lg-none mobile-menu-container">
                <div class="menu-btn">
                    <div class="menu-btn__burger"></div>
                </div>
            </div>
        </div>
    </header>
</div>