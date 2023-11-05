<?php

print "<pre>";

print "GET";
print_r($_GET);

print "POST";
print_r($_POST);

print "REQUEST";
print_r($_REQUEST);

$nm = $_GET['nm'];
$age = $_GET['age'];
$gen = $_GET['gen'];

echo "your name is $nm and your age is $age, your age is $gen";

// hw
/*
name
age
class
sec
Marks:
eng
math
sci

GET RESULT

 */
