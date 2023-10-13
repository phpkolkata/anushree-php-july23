<?php

$pass = "abcd efghabcde fghab cdefg habcdefg habcdef  ghabcde fgh abcdefgh";

// echo md5($pass);
// echo strip_tags($pass);
// echo stripos($pass, "HE");
// echo trim($pass);
// echo substr($pass, 3);
// echo substr($pass, -1);
echo wordwrap($pass, 20, "<br>");
