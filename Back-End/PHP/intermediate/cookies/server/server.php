<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>server</title>
</head>
<body>
    <form action="server.php" method="post">
        <input type="text">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php 

if($_SERVER["REQUEST_METHOD"]== "POST"){
    echo "hello world!! <br>";
    foreach($_SERVER as $key => $value){
        echo "{$key} =  {$value} <br>";
    }
}

?>