<?php

function calc(int $v1, int $v2, string $act = "add"): int | string
{
    if ($act == "add") {
        return $v1 + $v2;
    } else if ($act == "sub") {
        return $v1 - $v2;
    } else if ($act == "mul") {
        return $v1 * $v2;
    } else if ($act == "div") {
        return $v1 / $v2;
    } else {
        return "wrong action given";
    }

}

echo calc(30, 40, "add");
echo calc(30, 40, "sub");
echo calc(30, 40, "div");
echo calc(30, 40, "mul");

echo calc(30, 40);
