<?php

function outputArray(int $n): array
{
    $a = [];
    do
    {
        $a[] = $n;
        if ($n % 2 == 0) {
            $n /= 2;
        } else {
            $n = 3 * $n + 1;
        }
    } while ($n > 1);
    $a[] = $n;

    return $a;
}

$n = 12;
$array = outputArray($n);
var_dump($array);
