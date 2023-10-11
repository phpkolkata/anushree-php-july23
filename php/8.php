<?php
// Function

// 1. function name
// 2. paramaters/arguments
// 3. optional param/args
// 4. return / processed function
// 5. return type

// processed function
function hello(string $x = ""): void
{
    echo "hello";
}
hello();

// return function
function hi(): string
{
    return "hi";
}

echo hi();
$res = hi();
echo $res;
