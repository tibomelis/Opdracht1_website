<div class="container-fluid custom-bg-gray mt-5 py-5 px-1 px-lg-5">
    <div class="container pb-4">
        <div class="row d-flex justify-content-center">
            <?php foreach ($footer_nav_links as $column): ?>
                <div class='col-12 col-sm-2 mx-4 d-sm-block text-md-start text-center'>
                    <p class="bold"> <?= $column['txt'] ?> </p>
                    <?php foreach ($column['links'] as $link): ?>
                        <a class='text-body' href='<?= $link["link"] ?>'><p><?= $link['txt'] ?></p></a>
                    <?php endforeach;?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>