<?php
//$temperature = [];
$t = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

sort($t);
$amountArray= count($t);
echo " Average Temperature is : " . array_sum($t) / $amountArray . PHP_EOL;
echo " List of five lowest temperatures : ";
for ($i = 0; $i < 5; $i++) {
    echo $t[$i] . ' ';
}
echo PHP_EOL;
echo " List of five highest temperatures : ";
for ($i = $amountArray - 5; $i < $amountArray; $i++) {
    echo $t[$i] . ' ';
}
echo PHP_EOL;