<?php
$arr = [1, 2, 3, 4, 5];
$delElem = 1;
function delArray (array $a, int $elem){
    array_splice($a, $elem, 1);
    return $a;
}

$arr = delArray($arr, $delElem);
var_dump($arr);
