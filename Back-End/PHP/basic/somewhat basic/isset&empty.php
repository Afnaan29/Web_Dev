<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset&empty.php" method="post">
        <label>enter username</label>
        <input type="text" name="username" ><br>
        <label>enter password</label>
        <input type="text" name="password" ><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php 


foreach($_POST as $key => $value){
    echo "$key = $value <br>";
}
if(isset($_POST["login"])){
        $username = $_POST["username"];
      if(empty($username)){
        echo "username is missing";

      }
      elseif(empty($_POST["password"])){
        echo"the password is missing";
      }
      else{
        echo "hello $username";
      }
}
?>
