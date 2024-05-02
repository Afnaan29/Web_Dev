<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
        <input type="radio" value="Visa" name="credit_cards">Visa<br>
        <input type="radio" value="Rupay" name="credit_cards">Rupay<br>
        <input type="radio" value="Mastercard" name="credit_cards">Mastercard<br>
        <input type="submit" value="confirm" name="confirm">
    </form>
</body>
</html>


<?php 


if(isset($_POST["confirm"])){
    $credit_card = null;
    if(isset($_POST["credit_cards"])){
        $credit_card = $_POST["credit_cards"];
    }
    switch($credit_card){
        case "Visa":
            echo "You have selected Visa";
            break;
        case "Rupay":
            echo "You have selected Rupay";
            break;
        case "Mastercard":
            echo "You have selected Mastercard";
            break;
        default:
            echo "Please select a payment";  
            break;  
    }

}




?>