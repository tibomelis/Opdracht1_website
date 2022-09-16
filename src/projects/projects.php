<?php


?>

<div class="container p-lg-5 mb-0 pb-0">
    <div class="row">
        <?php
        echo '<div class="p-2 col-12 col-md-6 d-block">' . get_project(0) . '</div>';
        echo '<div class="p-2 col-12 col-md-6 d-none d-sm-block">' . get_project(1) .
            '</div>';
        echo '<div class="p-2 col-12 col-md-6 d-none d-md-block">' . get_project(2) .
            '</div>';
        echo '<div class="p-2 col-12 col-md-6 d-none d-md-block">' . get_project(3) .
            '</div>';
        echo '<div class="p-2 col-12 col-md-6 d-none d-lg-block">' . get_project(4) .
            '</div>';
        echo '<div class="p-2 col-12 col-md-6 d-none d-lg-block">' . get_project(5) .
            '</div>';
        ?>
    </div>
</div>

<div class="d-flex justify-content-center my-4 mb-5 p-1">
    <a href="/pages/all_projects.php">
        <div class="py-2 px-3 custom-bg-blue text-white bold"><?= $load_projects_txt ?></div>
    </a>
</div>