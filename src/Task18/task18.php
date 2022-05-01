<?php

function searchEl(array $a): mixed
{
    $countA = array_count_values($a);
    arsort($countA);
    $elementCount = reset($countA);
    if ($elementCount < count($a)/2) {
        return false;
    }
    $nameElement = key($countA);

    return $nameElement;
}

$array = [1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6];
$element = searchEl($array);
if ($element !== false) {
    echo $element . PHP_EOL;
}
else {
    echo "array havn't majority element" . PHP_EOL;
}
