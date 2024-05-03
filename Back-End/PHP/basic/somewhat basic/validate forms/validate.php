<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="validate.php" method="post">
        username: <br>
        <input type="text" name="username">
        <br>
        age: <br>
        <input type="text" name="age">
        <br>
        email: <br>
        <input type="text" name="email">
        <br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 

if(isset($_POST["login"])){

   $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
   $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
   $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

   if(empty($age)){
    echo "ENTER valid age";
   }
   else{
    echo "YOur age is $age";
   }
   if(empty($email)){
    echo "ENTER valid email";
   }
   else{
    echo "YOur email is $email";
   }
   if(empty($username)){
    echo "ENTER valid username";
   }
   else{
    echo "YOur username is $username";
   }





}

?>