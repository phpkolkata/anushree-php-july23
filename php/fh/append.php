<?php

$file = "1.txt";
$mode = "a";

$fp = fopen($file, $mode);

$str = "hello india";
fwrite($fp, $str);

fclose($fp);
