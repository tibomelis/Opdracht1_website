<div class="container mt-5 all-images mx-auto">
    <?php foreach ($projects as $project): ?>
        <div class='hover-img popup-trigger'>
            <img class='project-img' src="<?= $project['src'] ?>">
            <div class="project-overlay"><p>Ultamate Design<span class='circle-icon'></span></p></div>
            <div class='pricetag-container'>
                <div class='top'>
                    <div class='p-1'>PRIJS</div>
                    <div class='price p-1'><?= $project['price'] ?></div>
                </div>
                <div class='bottom'>
                    <div class='left'></div>
                    <div class='right'></div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="d-flex justify-content-center my-4 mb-5 p-1">
    <a href="/pages/all_projects.php">
        <div class="py-2 px-3 custom-bg-blue text-white bold"><?= $load_projects_txt ?></div>
    </a>
</div>