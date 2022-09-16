<?php
/*
    Auteur:         Tibo Melis
    Omschrijving:   Een opdracht van MaxServ
    Datum:          9/1/2022
    Bestand:        De html code voor de website
*/
session_start();
$lang = (empty($_SESSION['lang']) ? 'nl' : $_SESSION['lang']);
include "../src/variables/variables_$lang.php";
$_SESSION['curpage'] = 'over_ons';
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
    <?php include '../src/overlays.html'; ?>
    <!-- logo, menu, lang-select -->
    <?php include '../src/nav.php'; ?>
    <div class="container mt-5">
        <article class="p-5 pb-0">
            <h1>Deze pagina bestaat nog niet!</h1>
            <div class="d-flex">
                <img style="transform: translateY(10%)" class="mt-5" src="../images/page_does_not_exist.png"
                     alt="">
                <h4 class="align-self-center justify-self-center text-center mx-auto">
                    Oeps...
                </h4>
            </div>
        </article>
    </div>
    <!--  links at bottom -->
    <?php include '../src/footer_links.php' ?>
    <!-- logo with copyright -->
    <?php include '../src/footer.php' ?>
</div>
</body>

</html>