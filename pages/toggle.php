<?php
session_start();
switch ($_GET['toggle']) {
    case 'lang_sel':
        if (empty($_SESSION['lang_sel_display'])) {
            $_SESSION['lang_sel_display'] = 'block';
        }
        if ($_SESSION['lang_sel_display'] == 'block') {
            $_SESSION['lang_sel_display'] = 'none';
            $_SESSION['lang_sel_toggler'] = '<';
        } else {
            $_SESSION['lang_sel_display'] = 'block';
            $_SESSION['lang_sel_toggler'] = '>';
        }
        break;
    case 'contrast':
        if (empty($_SESSION['contrast_active'])) {
            $_SESSION['contrast_active'] = false;
        }
        if ($_SESSION['contrast_active']) {
            $_SESSION['contrast_active'] = false;
        } else {
            $_SESSION['contrast_active'] = true;
        }
        break;
}


?>

<script defer>
    history.back();
</script>
