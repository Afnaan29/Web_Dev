<?php
$username = "Afnaan NImbudkar";

$username = strtolower($username);
// echo $username;
$firstname = substr($username, 0, 6);
// echo $firstname;
$username = strtoupper($username);
// echo $username;
$count = strlen($username);
// echo $count;
$username = trim($username);
// echo $username;
$username = str_replace("I", "i", $username);
// echo $username;
$username = strpos($username, "r");
// echo $username;

$username = strcmp($username, "Afnaan nimbudkar");
// echo $username;
$username = strrev($username);
// echo $username;
$username = str_shuffle($username);
// echo $username;



$username = str_pad($username, 5, "*");
// echo $username;

