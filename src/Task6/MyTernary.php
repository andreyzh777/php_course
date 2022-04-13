<?php
//$temperature = [];
$t = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

sort($t);
//$sumt = array_sum ($t);
$k= count($t);
$sred = array_sum($t)/$k;
echo " Average Temperature is : $sred ".PHP_EOL;
echo " List of five lowest temperatures : ";
for ($i=0; $i<5; $i++) echo $t[$i].' ';
echo PHP_EOL;
echo " List of five highest temperatures : ";
for ($i=$k-5; $i<$k; $i++) echo $t[$i].' ';
echo PHP_EOL;