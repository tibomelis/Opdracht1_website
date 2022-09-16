<?php
$mysqli = mysqli_connect('localhost', 'root', '');
function connectWith($database)
{
    global $mysqli;
    return mysqli_select_db($mysqli, $database);
}

?>