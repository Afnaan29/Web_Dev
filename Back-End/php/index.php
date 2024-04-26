<?php
 echo "hello world <br>";


 $name = "Afnaan";
 $age = 17;

 $gpa = 2.5;
 $pass = true;
 $salary = 1000;
 $expences = 500;


 echo "My name is {$name}, age {$age} and my gpa is {$gpa} pass: {$pass} <br>";
 echo "My salary is \${$salary} and expences is \${$expences}<br>";
 $left_over = $salary - $expences;

 echo "The money i have left over is \${$left_over} <br>";

 $add = $salary + $expences;
 echo "add operator {$add} <br>";

 $sub = $salary - $expences;
 echo "sub operator {$sub} <br>";

 $mul = $salary * $expences;
 echo "mul operator {$mul} <br>";

 $div = $salary / $expences;
 echo "div operator {$div} <br>";

 $rem = $salary % $expences;
 echo "div operator {$rem} <br>";

 $power = $salary ** 2;
 echo "div operator {$power} <br>";

 echo "before increment operator \${$expences} <br> ";
 $expences++;
 echo "after increment operator \${$expences} <br>";

 echo "before decrement operator \${$expences} <br>";
 $expences--;
 echo "after decrement operator \${$expences} <br>";

/* operator precedence
    ()
    **
    * / %
    + -
*/
    $operator_precedence = ((((5+5)*5)-10)**2);
    echo $operator_precedence;
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php practice</title>

    <style>
        body{
            background: #E1E1D9;
        }
    </style>
</head>
<body>
    
</body>
</html>