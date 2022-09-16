<!doctype html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="frm">
    <form action="process.php" method="post">
        <p>
            <label>Username: </label>
            <input type="text" class="username" name="username" required>
        </p>
        <p>
            <label>Password: </label>
            <input type="text" class="password" name="password" required>
        </p>
        <p>
            <input type="hidden" name="action" value="login">
            <input type="submit" class="btn" value="Login">
        </p>
    </form>
</div>
</body>
</html>