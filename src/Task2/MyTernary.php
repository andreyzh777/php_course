<?php

function addInc(string $str, int $count = 1)
{
    $First_S = $str[0];
    $Chek1 = (int) ($str[1] + $str[2]);
    for ($i = 0; $i < $count; $i++, $Chek1++) {
        if ($Chek1 > 9) {
            echo $First_S . $Chek1 . PHP_EOL;
        } else {
            echo $First_S . '0' . $Chek1 . PHP_EOL;
        }
    }
}

addInc('A01', 150);