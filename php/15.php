<?php
// Associative array 2 ways to create

// 1. with array function
$arr = array("name" => "raj", "age" => 33, "class" => 5);

// print "<pre>";
// print_r($arr); // outputs array for debuging purpose

// 2. direct with keys
$arr['name'] = "raj";
$arr['age'] = 33;
$arr['class'] = 5;

// special loop for array looping, only vlaue
foreach ($arr as $v) {
    echo $v . "<br>";
}

// special loop for array looping with keys
foreach ($arr as $k => $v) {
    echo $k . "=" . $v . "<br>";
}
