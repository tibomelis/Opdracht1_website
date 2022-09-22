<div class="mobile-menu-popup">
    <?php foreach ($nav_items as $nav_item): ?>
        <a class="p-3 mx-0 menu-link" href="<?= $nav_item['href'] ?>"><?= $nav_item['title'] ?></a>
    <?php endforeach; ?>
</div>

<div class="popup-container d-none">
    <div class="popup-close-btn" onclick="hide_popup()">X</div>
    <img alt="image" class="popup-img" src="ඞ">
</div>
