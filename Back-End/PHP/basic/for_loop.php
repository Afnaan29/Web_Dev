<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for_loop.php" method="post">
        <label>Enter a number to print: - </label><br>
        <input type="number" name="x"><br>
        <input type="submit" value="start"><br>
    </form>
</body>
</html>

<?php

 $counter = $_POST["x"];

 for( $i = 0; $i <= $counter; $i++){

    echo $i . "<br>";

 }

?>
