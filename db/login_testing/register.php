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
            <label>Choose a Username: </label>
            <input type="text" class="username" name="username" required>
        </p>
        <p>
            <label>Set your password: </label>
            <input type="text" class="password" name="password" required>
        </p>
        <p>
            <input type="hidden" name="action" value="register">
            <input type="submit" class="btn" value="Register">
        </p>
    </form>
</div>
</body>
</html>