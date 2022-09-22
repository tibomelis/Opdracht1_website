<?php
/*
    Auteur:         Tibo Melis
    Omschrijving:   Een opdracht van MaxServ
    Datum:          9/1/2022
    Bestand:        De html code voor de website
*/
session_start();
$lang = (empty($_SESSION['lang']) ? 'nl' : $_SESSION['lang']);
$_SESSION['curpage'] = 'contact';
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
    <?php include '../src/nav.php'; ?>
    <div class="p-3"></div>
    <div class="container mt-5 custom-bg-gray p-5">
        <form action="sendmail/send_email.php" method="post">
            <table>
                <tr>
                    <td>
                        <label><?= $contact_form['fnametxt'] ?></label>
                    </td>
                    <td>
                        <input name="_fname" type="text" placeholder="<?= $contact_form['fnameplh'] ?>" required maxlength="20">
                    </td>
                    <td>
                        <input name="_lname" type="text" placeholder="<?= $contact_form['lnameplh'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><?= $contact_form['emailtxt'] ?> </label>
                    </td>
                    <td>
                        <input name="_email" type="email" placeholder="<?= $contact_form['emailexample'] ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><?= $contact_form['phonetxt'] ?> </label>
                    </td>
                    <td>
                        <input name="_phone" type="text" placeholder="<?= $contact_form['phoneplh'] ?>" required minlength="10">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><?= $contact_form['summarytxt'] ?> </label>
                    </td>
                    <td>
                        <input name="_sumry" type="text" placeholder="<?= $contact_form['summaryplaceholder'] ?>" maxlength="50"
                               minlength="5">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="<?= $contact_form['send_btn'] ?>">
                    </td>
                </tr>
            </table>
        </form>
        <a href="javascript: (() => { history.back();})();">Terug</a></div>
    <!--  links at bottom -->
    <?php include '../src/footer_links.php' ?>
    <!-- logo with copyright -->
    <?php include '../src/footer.php' ?>
</div>
</body>

</html>