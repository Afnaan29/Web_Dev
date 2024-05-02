<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="while.php" method="post">
        <input type="button" value="start" name="start">
        <input type="button" value="stop" name="stop">
    </form>
</body>
</html>

<?php 

$steps = 0;
$running = true;

while($running){

    if(isset($_POST["stop"])){
        $running = false;
    }
    elseif(isset($_POST["start"])){
        $steps ++;
        echo $steps . "<br>";
    }
}

?>