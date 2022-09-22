<?php
$data = !empty($_GET['request']) ? (base64_decode($_GET['request'])) : '{"max_projects":"6"}';
$request = json_decode($data);
$_SESSION['max_projects'] = $request->max_projects;
$max_projects = $_SESSION['max_projects'];

?>

<div class="container mt-5 all-images mx-auto">
    <?php $i = 0; ?>
    <?php foreach ($projects as $project): ?>
        <?php $i++; ?>
        <?php if ($i - 1 < $max_projects): ?>
            <div class='hover-img popup-trigger'>
                <img class='project-img' src="<?= $project['src'] ?>" alt="project image">
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
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<div class="d-flex justify-content-center my-4 mb-5 p-1">
    <form action="">
        <?php if (sizeof($projects) > $max_projects): ?>
            <input type="hidden" name="request"
                   value="<?php echo base64_encode('{"max_projects":"' . ($max_projects + 6) . '"}'); ?>">
            <input class="py-2 px-3 custom-bg-blue text-white bold" type="submit" value="<?= $load_projects_txt ?>">
        <?php else: ?>
            <input type="hidden" name="request"
                   value="<?php echo base64_encode('{"max_projects":"6"}'); ?>">
            <input class="py-2 px-3 custom-bg-blue text-white bold" type="submit" value="<?= $hide_projects_txt ?>">
        <?php endif; ?>
    </form>
</div>

