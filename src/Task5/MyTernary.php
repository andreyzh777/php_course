<?php


$a = [];
for ($i = 0; $i < 10; $a[$i] = ++$i) ; //creat array 10 element

function insert_array(array &$changeArray, int $val, int $plase): void //val - вставляемое значение,  plase - в какую часть массива, от 0
{
    $amountElement = count($changeArray);
    if ($amountElement < $plase) {
        for ($i = $amountElement; $i < $plase; $i++) {
            $changeArray[$i] = null;
        }
        $changeArray[$plase] = $val;
        return;
    }

    for ($i = $plase; $i <= $amountElement; $i++) {
        $tem = $changeArray[$i];
        $changeArray[$i] = $val;
        $val = $tem;
    }
    $changeArray[$i] = $val;
}

insert_array($a, 15, 0);
foreach ($a as $key => $val) echo $val . PHP_EOL;