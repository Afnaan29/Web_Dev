<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="pizza">
        Pizza <br>
        <input type="checkbox" name="Burgur" value="Burgur">
        Burgir <br>
        <input type="checkbox" name="Hotdog" value="Hotdog">
        Garamkutta <br>
        <input type="checkbox" name="Taco" value="Taco">
        Taco <br>
        <input type="submit" name="submit" value="submit"><br>
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){

    if(isset($_POST["Taco"])){
        echo"you like Taco <br>";
    }
    if(empty($_POST["Taco"])){
        echo"you dont like taco <br>";
    }


    if(isset($_POST["pizza"])){
        echo"you like pizza <br>";
    }
    if(empty($_POST["pizza"])){
        echo"you dont like pizza <br>";
    }


    if(isset($_POST["Burgur"])){
        echo"you like Burgur <br>";
    }
    if(empty($_POST["Burgur"])){
        echo"you dont like Burgur <br>";
    }


    if(isset($_POST["Hotdog"])){
        echo"you like Hotdog <br>";
    }
    if(empty($_POST["Hotdog"])){
        echo"you dont like Hotdog <br>";
    }
    

}
?>