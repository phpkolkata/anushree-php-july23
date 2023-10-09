<?php
// loop
// for loop - logical use
// while loop - db fetching
// do while loop - almost never

// 1. initialization ($i=0)
// 2. condition ($i <= 100)
// 3. increment ($i++)

for ($i = 1; $i < 10; $i++) {
    echo $i . "<br>";
}

$j = 1; //initialization
while ($j <= 10) {
    echo $j . "<br>";
    $j++; // increment
}

$k = 0; // initialization
do {
    echo $k . "<br>";
    $k++; // increment
} while ($k <= 10);

// echo "end";
