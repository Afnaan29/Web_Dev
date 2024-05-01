<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ex_assosiative.php" method="post">
        <label>Enter a countey</label><br>
        <input type="text" name="country"><br>
        <input type="submit">
    </form>

</body>
</html>

<?php 

$capitals = array(

    "USA" => "Washington DC",
    "India" => "New Delhi",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul"
);

$capital = $capitals[$_POST["country"]];

echo "The capital is $capital";


?>