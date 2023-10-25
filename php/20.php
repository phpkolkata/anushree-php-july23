<?php

$p_22 = array("name" => "raj", "age" => 33);
$m_22 = array("eng" => 33, "math" => 55, "sci" => 55);
$a_22 = array("class" => 5, "sec" => "A", "marks" => $m_22);

$p_35 = array("name" => "suman", "age" => 34);
$m_35 = array("eng" => 67, "math" => 34, "sci" => 64);
$a_35 = array("class" => 5, "sec" => "B", "marks" => $m_35);

$roll_22 = array("personal" => $p_22, "academic" => $a_22);
$roll_35 = array("personal" => $p_35, "academic" => $a_35);

$std = array("22" => $roll_22, "35" => $roll_35);

print "<pre>";
print_r($std);

// loop without marks
// foreach ($std as $k => $v) {
//     echo "<h1>Roll-$k </h1>";
//     foreach ($v as $k1 => $v1) {
//         print "<b>$k1:</b><br>";
//         foreach ($v1 as $k2 => $v2) {
//             print "$k2=$v2<br>";
//         }
//     }
// }

// hw array_task2  , hint : is_array() in foreach loop

foreach ($std as $k => $v) {
    echo "<h1>Roll: $k</h1>";
    foreach ($v as $k1 => $v1) {
        echo "<b><u>$k1</u></b>:<br>";
        foreach ($v1 as $k2 => $v2) {
            if (is_array($v2)) {
                print "<b><u>$k2</u></b>:<br>";
                foreach ($v2 as $k3 => $v3) {
                    echo "$k3 - $v3<br>";
                }
            } else {
                echo "$k2 - $v2<br>";
            }
        }
    }
}
