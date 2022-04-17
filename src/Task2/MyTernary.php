<?php

function addInc(string $str, int $count = 1)
{
    $firstS = $str[0];
    $Chek1 = (int) ($str[1] + $str[2]);
    for ($i = 0; $i < $count; $i++, $Chek1++) {
        if ($Chek1 > 9) {
            echo $firstS . $Chek1 . PHP_EOL;
        } else {
            echo $firstS . '0' . $Chek1 . PHP_EOL;
        }
    }
}

addInc('A01', 150);