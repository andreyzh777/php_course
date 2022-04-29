<?php
function find (array $a, int $n): array
{
    $arrayOut = [];
    $kollElement = count ($a) - 2;
    for ($i = 0; $i < $kollElement; $i++)
    {
        $sum = $a[$i] + $a[$i + 1] + $a[$i + 2];
        if ($sum == $n) {
            $str = strval($a[$i]) . " + " . strval($a[$i + 1]) ." + " . strval($a[$i + 2]) . " = " . strval($sum);
            array_push($arrayOut, $str);
        }

    }

    return $arrayOut;
}

$array = [2, 7, 7, 1, 8, 2, 7, 8, 7];
$number = 16;
var_dump(find($array, $number));