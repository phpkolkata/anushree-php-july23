<?php
$x = array("x", "y");
$y = array("a", $x);

print "<pre>";
print_r($y);

echo $y[0]; // a
echo $y[1][0]; // x

// ---------------------------
$a[0] = "a";
$a[1] = "b";

$x[0] = "x";
$x[1] = "y";

$arr[0] = $a;
$arr[1] = $x;
print "<pre>";
print_r($arr);
// ----------------------

$arr2 = array(
    array("a", "b"),
    array("x", "y"),
);
print "<pre>";
print_r($arr2);
