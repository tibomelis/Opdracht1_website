<?php
if (!empty($_POST['action'])) {
    $action = $_POST['action'];
    // Get POST values
    $username = $_POST['username'];
    $password = $_POST['password'];

    // get database
    $mysqli = mysqli_connect('localhost', 'root', '');

    //prevent mysql injection
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($mysqli, $username);
    $password = mysqli_real_escape_string($mysqli, $password);

    //connect to database
    mysqli_select_db($mysqli, 'lwdb');

    // login
    if ($action == "login") {
        $result = mysqli_query($mysqli, "select * from users where username = '$username' and password = '$password'")
        or die("Failed to query database " . mysqli_error());
        $row = mysqli_fetch_array($result);
        if ($row['username'] == $username && $row['password'] == $password) {
            echo "login succes 
<form action='process.php' method='post'>
    <p>
        <input type='submit' value='Delete account?'>
        <input type='hidden' name='action' value='delete'>
        <input type='hidden' name='username' value='$username'>
        <input type='hidden' name='password' value='$password'>
    </p>
</form>";
        } else {
            echo "login failed. <a href='login.php'>try again.</a>";
        }
    }
    // regiser
    if ($action == "register") {
        $result = mysqli_query(
            $mysqli,
            "select 'username' from users where username = '$username';"
        ) or die("Failed to query database " . mysqli_error());
        if (!empty(mysqli_fetch_row($result))) {
            echo "Username already exists!";
        } else {
            $result = mysqli_query(
                $mysqli,
                "INSERT INTO `users` (`id`, `username`, `password`) VALUES (NULL, '$username', '$password');"
            ) or die("Failed to query database " . mysqli_error());
            if ($result) {
                echo "register succesfull!";
            } else {
                echo "register failed";
            }
        }
    }
    if ($action == "delete") {
        $result = mysqli_query(
            $mysqli,
            "DELETE FROM `users` WHERE username = '$username' and password = '$password';"
        ) or die("Failed to query database " . mysqli_error());
        print_r($result);
    }
}
?>
<p>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
</p>
