<?php
/*
    Auteur:         Tibo Melis
    Omschrijving:   Een opdracht van MaxServ
    Datum:          9/1/2022
    Bestand:        De html code voor de website
*/
session_start();
$lang = (empty($_SESSION['lang']) ? 'nl' : $_SESSION['lang']);
include "src/variables/variables_$lang.php";
$_SESSION['curpage'] = 'homepage';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">

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
    <link rel="stylesheet" href="sass/style.css">
    <!-- js -->
    <script src="js/main.js" defer></script>
    <!-- icon -->
    <link rel="shortcut icon" href="images/lorem-logo.png">
</head>

<body class="<?= (empty($_SESSION['contrast_active'])) ? '' : ($_SESSION['contrast_active'] ? 'custom-bg-darkgray' : '') ?>">
<div class="body-2 container-lg container-fluid">
    <?php include 'src/overlays.php'; ?>
    <?php include 'src/nav.php'; ?>
    <?php include 'src/texts/intro.php'; ?>
    <?php include 'src/projects_include/projects.php'; ?>
    <?php include 'src/texts/under_projects_text.php'; ?>
    <?php include 'src/footer_links.php' ?>
    <?php include 'src/footer.php' ?>
</div>
</body>

</html>

