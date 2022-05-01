<?php
function find(array $a, int $n): array
{
    $arrayOut = [];
    $amountElement = count ($a) - 2;
    for ($i = 0; $i < $amountElement; $i++)
    {
        $sum = $a[$i] + $a[$i + 1] + $a[$i + 2];
        if ($sum === $n) {
            $str = $a[$i] . " + " . $a[$i + 1] ." + " . $a[$i + 2] . " = " . $sum;
            $arrayOut[] = $str;
        }
    }

    return $arrayOut;
}

$array = [2, 7, 7, 1, 8, 2, 7, 8, 7];
$number = 16;
var_dump(find($array, $number));