<!--
    Auteur:         Tibo Melis
    Omschrijving:   Een opdracht van MaxServ
    Datum:          9/1/2022
    Bestand:        De html code voor de website

 -->
<?php
include '/Users/tibom/maxserv/Opdracht1_website/src/variables.php';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <title>Lorem</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ### Bootstrap ###-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ### Eigen links ### -->
    <!-- css -->
    <link rel="stylesheet" href="/Opdracht1_website/sass/style.css">
    <!-- js -->
    <script src="/Opdracht1_website/js/main.js" defer></script>
    <!-- icon -->
    <link rel="shortcut icon" href="images/lorem-logo.png">
</head>

<body>
<div class="body-2 container-lg container-fluid">
    <!-- overlay, popup -->
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/overlays.html'; ?>
    <!-- logo, menu, lang-select -->
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/nav.html'; ?>

    <!-- intro text -->
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/articles/intro.html'; ?>
    <!-- kitchen images -->
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/projects.php'; ?>
    <!-- more projects button -->
    <div class="d-flex justify-content-center my-4 mb-5 p-1">
        <a href="https://maxserv.com">
            <div class="py-2 px-3 custom-bg-blue text-white bold">MEER PROJECTEN TONEN</div>
        </a>
    </div>
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/articles/articles_container.php'; ?>
    <!--  links at bottom -->
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/footer_links.php' ?>
    <!-- logo with copyright -->
    <?php include '/Users/tibom/maxserv/Opdracht1_website/src/footer.php' ?>
</div>
</body>

</html>