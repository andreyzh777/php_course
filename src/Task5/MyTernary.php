<?php


$a = [];
for ($i = 0; $i < 10; $a[$i] = ++$i) ; //creat array 10 element

function insert_array(&$b, $Val, $n): void //Val - вставляемое значение,  n - в какую часть массива, от 0
{
    $k = count($b);
    if ($k < $n) {
        for ($i = $k; $i < $n; $i++) $b[$i] = null;
        $b[$n] = $Val;
        return;
    }

    for ($i = $n; $i <= $k; $i++) {
        $tem = $b[$i];
        $b[$i] = $Val;
        $Val = $tem;
    }
    $b[$i] = $Val;
}

insert_array($a, 15, 0);
foreach ($a as $key => $val) echo $val . PHP_EOL;