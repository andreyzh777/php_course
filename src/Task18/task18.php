<?php

function sierchEl(array $a): mixed
{
    $n = count ($a);
    $countA = array_count_values($a);
    arsort($countA);
    $elementCount = reset ($countA);
    $nameElement = key ($countA);
    if ($elementCount < $n/2) {

        return false;
    }

    return $nameElement;
}

$array = [1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6];
$element = sierchEl($array);
if ($element !== false) {
    echo $element . PHP_EOL;
}
else {
    echo "array havn't majority element" . PHP_EOL;
}
