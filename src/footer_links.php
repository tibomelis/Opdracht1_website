<?php

?>
<div class="container-fluid custom-bg-gray mt-5 py-5 px-1 px-lg-5">
    <div class="container pb-4">
        <div class="row d-flex justify-content-center">
            <?php
            foreach ($footer_nav_links as $column) {
                echo "<div class='col-12 col-sm-2 mx-4 d-sm-block text-md-start text-center'>";
                echo "<p class='bold'>" . $column['txt'] . "</p>";
                foreach ($column['links'] as $link)
                    echo "<a class='text-body' href='" . $link['link'] . "'><p>" . $link['txt'] . "</p></a>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>