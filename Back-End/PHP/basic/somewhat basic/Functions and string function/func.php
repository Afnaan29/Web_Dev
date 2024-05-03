<?php 

function hypotenuse(int $a , int $b){
  $c = sqrt($a ** 2 + $b ** 2);
    echo "The hypotenuse of $a and $b is $c";
}
echo hypotenuse(5,9);

?>
