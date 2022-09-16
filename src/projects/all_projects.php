<div class="container mt-5 all_images">
    <div class="py-5">
        <a href="/index.php" class="py-2 px-3 custom-bg-blue text-white bold"><?= $back_button_txt ?></a>
    </div>
    <div class="row">
        <?php
        for ($i = 0; $i < 8; $i++) {
            echo '<div class="p-2 col-12 col-lg-6">' . get_project($i) . '</div>';
        }
        ?>
    </div>
</div>