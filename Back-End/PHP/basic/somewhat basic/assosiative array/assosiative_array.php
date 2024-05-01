
<?php
//an assosiative array is like an object with key=>value pairs

$capital = array(

    "USA" => "Washington DC",
    "India" => "New Delhi",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul"
);

$capital["USA"] = "mumbai";
$capital["China"] = "Beijing";
array_pop($capital);
array_shift($capital);
$keys = array_keys($capital);
$values = array_values($capital);

foreach ($capital as $key => $value) {
    echo "The capital of $key is $value <br>";
}
echo "<br>";
foreach ($keys as $key) {
    echo "The key is $key <br>";
}
echo "<br>";
foreach ($values as $value) {
    echo "The value is $value <br>";
}



?>