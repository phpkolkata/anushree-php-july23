<?php
$file = "1.txt";
$mode = "r";
$fp = fopen($file, $mode);
$str = "";
while (!feof($fp)) {

    // $str = $str . fgets($fp);
    $str .= fgets($fp);
}

fclose($fp);

echo $str;

$x = "a";
// $x = $x . "b";
$x .= "b";

echo $x;

$y = 10;
// $y = $y + 20;
$y += 20;
