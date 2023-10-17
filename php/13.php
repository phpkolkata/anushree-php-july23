<?php
// 1. numeric array
// 2. associative array
// 3. multidiamensional array

// numeric array - index 0,1,2,3....
$arr = array("a", "b", "c");

// 3 ways to create numeric array
// ----------------------------

// 1. with array function
$arr = array("a", "b", "c");

// print "<pre>";
// print_r($arr); // outputs array for debuging purpose

// 2. direct with keys
$arr[0] = "a";
$arr[1] = "b";
$arr[2] = "c";
$arr[200] = "d";

// 3. direct without keys
$arr[] = "a";
$arr[] = "b";
$arr[] = "c";

print "<pre>";
print_r($arr); // outputs array for debuging purpose
