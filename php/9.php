<?php
function add(int $v1, int $v2): int | string
{
    return $v1 + $v2 . "<br>";
}

function sub(int $v1, int $v2): int | string
{
    return $v1 - $v2 . "<br>";
}

function div(int $v1, int $v2): int | string
{
    return $v1 / $v2 . "<br>";
}

function mul(int $v1, int $v2): int | string
{
    return $v1 * $v2 . "<br>";
}

echo add(40, 58);
echo add(420, 58);
echo sub(420, 58);
echo div(420, 58);
echo mul(420, 58);
