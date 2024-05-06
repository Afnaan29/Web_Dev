<?php

setcookie("First_name", "Afnaan" , time() + 86400 * 2, "/"); 

setcookie("double_name", "Afnaan" , time() - 0, "/"); //to delete a set time to - 0  like this

setcookie("Middle_name", "Zaheer" , time() + 86400 * 3, "/");
setcookie("Last_name", "Nimbudkar" , time() + 86400 * 7, "/");

// foreach($_COOKIE as $key => $value){
//         echo "{$key} = {$value} <br>";
// }
if(isset($_COOKIE["First_name"])){
    echo "Your first name is {$_COOKIE["First_name"]} <br>";
    if(isset($_COOKIE["Middle_name"])){
        echo "Your middle name is {$_COOKIE["Middle_name"]} <br>";
        if(isset($_COOKIE["Last_name"])){
            echo "Your last name is {$_COOKIE["Last_name"]} <br>";
            
        }
    }
    
}

?>