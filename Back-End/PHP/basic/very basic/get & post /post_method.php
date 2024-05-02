<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post Method</title>
</head>
<body>
    <div align="center">
        <h1>Log In Form</h1>
    </div>
    <form action="post_method.php" method="post">
        <label>Username</label><br>
        <input type="text" name="username"><br><br>

        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php

echo "{$_POST["username"]} <br> ";
echo "{$_POST["password"]} <br>";


?>