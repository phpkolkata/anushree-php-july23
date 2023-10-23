<?php

$p_22 = array("name" => "raj", "age" => 33);
$a_22 = array("class" => 5, "sec" => "A");

$p_35 = array("name" => "suman", "age" => 34);
$a_35 = array("class" => 5, "sec" => "B");

$roll_22 = array("personal" => $p_22, "academic" => $a_22);
$roll_35 = array("personal" => $p_35, "academic" => $a_35);

$arr = array("22" => $roll_22, "35" => $roll_35);

print_r($arr);

// echo $arr[35]['personal']['name'];
// echo $arr[35]['academic']['class'];

print_r($arr[35]['personal']);
