<?php

$fp = fopen("1.txt", "w");

$str = "hello india";
fwrite($fp, $str);

fclose($fp);
