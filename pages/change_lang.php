<?php
session_start();
$_SESSION['lang'] = $_GET['newlang'];
?>

<script defer>
    history.back()
</script>
