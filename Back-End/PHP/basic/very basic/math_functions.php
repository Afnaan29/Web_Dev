<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math</title>
</head>
<body>
    <h1 align="center">Math Functions</h1>
    <Form action="math_functions.php" method="post">
        <label>Enter value for X variable</label>
        <input type="number" name="x"><br><br>
        <label>Enter value for Y variable</label>
        <input type="number" name="y"><br><br>
        <label>Enter value for Z variable</label>
        <input type="number" name="z"><br><br>
        <input type="submit" value="total">
    </Form>
</body>
</html>

<?php

$num = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total = null;

$total = abs($num);
echo "absolute is $total <br>";

$total = round($num);
echo "round is $total <br>";

$total = floor($num);
echo "floor $total <br>";

$total = ceil($num);
echo "ceil $total <br>";

$total = sqrt($num);
echo "sqrt $total <br>";

$total = max($num,$y,$z);
echo "maximum is $total <br>";

$total = min($num,$y,$z);
echo "minimum is $total <br>";

$total = rand(1,100);
echo "random no is $total <br>";

?>