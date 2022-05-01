<?php
$a = [
    "as" => "zero",
    "bs" => "betta",
    "cs" => "gretta",
    "ds" => "delta",
    "es" => "creat"
];

function mixer(array $arr) : array
{
    $b = array_flip($arr);
    shuffle($arr);
    $arr = array_flip($arr);
    foreach ($arr as $key => $v) {
        $arr[$key] = $b[$key];
    }
    return $arr = array_flip($arr);
}
var_dump (mixer($a));
