<?php

$fruits = array("apple","mango","orange","pineapple");

echo "Using for loop";
for ( $i = 0; $i < $fruits; $i++){
   echo $fruits[$i]."<br>";
}
// array functions or methods

array_push($fruits, "cococnut");
array_pop($fruits);
array_shift($fruits);
array_unshift($fruits,"red");
echo "Using foreach loop";

foreach($fruits as $fr){
    echo $fr . "<br>";
}


?>