<?php
for ($i = 1; $i <= 10; $i++) {
    if (($i % 2) == 0) {
        echo $i . "<br>";
    }
}

for ($i = 1; $i <= 10; $i++) {
    if (($i % 2) != 0) {
        echo $i . "<br>";
    }
}

for ($i = 1; $i <= 10; $i++) {
    if (($i % 2) != 0) {
        echo $i . "odd<br>";
    } else {
        echo $i . "even<br>";

    }
}
