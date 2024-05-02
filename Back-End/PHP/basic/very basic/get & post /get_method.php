<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Method</title>
</head>
<body>
    <div align="center">
        <h1>Log In Form</h1>
    </div>
    <form action="get_method.php" method="get">
        <label>Username</label><br>
        <input type="text" name="username"><br><br>

        <label>Password</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php

echo "{$_GET["username"]} <br> ";
echo "{$_GET["password"]} <br>";


?>