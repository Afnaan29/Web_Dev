<?php
$username = "Afnaan Zaheer Nimbudkar";
$user = array("Afnaan" , "Zaheer", "Nimbudkar");
$fullname = explode(" ",$username);
// explode is used to convert string into an array

foreach($fullname as $name){
    echo "$name <br>";
}
$string_user = implode(" ",$user);
echo "<br>" . $string_user;
// implode is used to convert array into an string
?>