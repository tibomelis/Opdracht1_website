<?php
    session_start();
    $lang = $_SESSION['lang'];
    require "$lang.php";
    function getTemplate($fname, $lname, $email, $phone, $sumry) {
        return getLangTemplate($fname, $lname, $email, $phone, $sumry);
    }
?>

<!--<script defer>-->
<!--    history.back()-->
<!--</script>-->

