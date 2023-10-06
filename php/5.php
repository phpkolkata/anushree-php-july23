<?php

// conditions
// $age 0-2 - toddler
// $age 3-12 - kid
// $age 13-19 - teen
// $age 19 above - adult

$age = 10;

if ($age <= 2) {
    echo "you are Toddler";
} elseif ($age <= 12) {
    echo "you are kid";
} elseif ($age <= 19) {
    echo "you are teen";
} elseif ($age > 19) {
    echo "you are adult";
} else {
    echo "wrong input";
}

// hw1 - try above programm with if condition only
// hw2 - as below
// condition
// avg < 33  - fail
// avg  33 - 45  - 3rd
// avg 46 - 70  - 2nd
// avg 71 above  - 1st

// hw3 - as below
// condition
// avg & class
//                6-12     1-5
// avg < 33  -     fail     D
// avg  33 - 45  - 3rd      C
// avg 46 - 70  -  2nd      B
// avg 71 above  - 1st      A

$class = 2;
$avg = 44;

// hint - nested if condition will apply
