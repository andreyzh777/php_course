<?php
function newElement(string $oldLast, string $last) : string
{
    $n = strlen($oldLast);
    $tempStr = "";
    $delta = 0;
    for ($i = 0; $i < $n; $i++) {
        $sum = (int) $oldLast[$i] + (int) $last[$i] + $delta;
        $delta = intdiv($sum, 10);
        $tempStr .= (string) $sum % 10;
    }
    if (strlen($last) > $n) {
        $delta += (int) $last[$i];
    }
    if ($delta) {
        $tempStr .= (string) $delta;
    }

    return $tempStr;
}

$element1 = '0';
$element2 = '1';
//echo "$element1 $element2 ";
do {
    $element3 = newElement($element1, $element2);
//    echo strrev($element3) . " ";
    $element1 = $element2;
    $element2 = $element3;
}
while (strlen($element3) < 100);

echo strrev($element3) . PHP_EOL;
