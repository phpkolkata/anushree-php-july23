<?php
// Associative array

function dd($arr, $die = false)
{
    print "<pre>";
    print_r($arr);
    if ($die) {
        die;
    }

}

// numeric array
$arr = array("raj", "33");
echo $arr[0]; // raj
echo $arr[1]; // 33

dd($arr);

// Associative array
$arr2 = array("name" => "raj", "age" => "33");
echo $arr2['name']; // raj
echo $arr2['age']; // 33

dd($arr2);
