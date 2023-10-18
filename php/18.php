<?php

$comedy2001 = array("a", "b");
$horror2001 = array("c", "d");
$year2001 = array("comedy" => $comedy2001, "horror" => $horror2001);

$comedy2002 = array("e", "f");
$horror2002 = array("g", "h");
$year2002 = array("comedy" => $comedy2002, "horror" => $horror2002);

$moviesArr = array("2001" => $year2001, "2002" => $year2002);

print "<pre>";
print_r($moviesArr);
