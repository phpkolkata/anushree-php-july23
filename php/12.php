<?php
// Array

// variable
$x = 10;
$y = "Abc";
$z = true;
$a = null;

// array
$arr = array("abc", true, "xyz", 200);

echo $arr[2];
echo $arr[3];
echo $arr[4];

echo count($arr);

for ($i = 0; $i <= 3; $i++) {
    echo $arr[$i] . "<br>";
}
