<?php

$password = "afnaan";

$hash = password_hash($password,PASSWORD_DEFAULT);

if(password_verify("afnaan", $hash)){
    echo"You are logged in";
}
else{
    echo"Incorrect password";
}

?>