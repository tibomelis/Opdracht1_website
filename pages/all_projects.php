<?php
/*
    Auteur:         Tibo Melis
    Omschrijving:   Een opdracht van MaxServ
    Datum:          9/1/2022
    Bestand:        De html code voor de website
*/
session_start();
$lang = (empty($_SESSION['lang']) ? 'nl' : $_SESSION['lang']);
$_SESSION['curpage'] = 'all_projects';
include "../src/variables/variables_$lang.php";
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
    <link rel="stylesheet" href="../sass/style.css">
    <!-- js -->
    <script src="../js/main.js" defer></script>
    <!-- icon -->
    <link rel="shortcut icon" href="../images/lorem-logo.png">
</head>

<body class="<?= (empty($_SESSION['contrast_active'])) ? '' : ($_SESSION['contrast_active'] ? 'custom-bg-darkgray' : '') ?>">
<div class="body-2 container-lg container-fluid">
    <!-- overlay, popup -->
    <?php include '../src/overlays.php'; ?>
    <!-- logo, menu, lang-select -->
    <div class="custom-bg-gray">
        <?php include '../src/nav.php'; ?>
    </div>
    <!-- kitchen images -->
    <?php include '../src/projects_include/all_projects.php'; ?>
    <!--  links at bottom -->
    <?php include '../src/footer_links.php' ?>
    <!-- logo with copyright -->
    <?php include '../src/footer.php' ?>
</div>
</body>

</html>