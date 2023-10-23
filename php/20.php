<?php

$p_22 = array("name" => "raj", "age" => 33);
$a_22 = array("class" => 5, "sec" => "A");

$p_35 = array("name" => "suman", "age" => 34);
$a_35 = array("class" => 5, "sec" => "B");

$roll_22 = array("personal" => $p_22, "academic" => $a_22);
$roll_35 = array("personal" => $p_35, "academic" => $a_35);

$std = array("22" => $roll_22, "35" => $roll_35);

foreach ($std as $k => $v) {
    echo "<h1>Roll-$k </h1>";
    foreach ($v as $k1 => $v1) {
        print "<b>$k1:</b><br>";
        foreach ($v1 as $k2 => $v2) {
            print "$k2=$v2<br>";
        }
    }
}

// hw array_task2  , hint : is_array() in foreach loop
