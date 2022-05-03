<?php
$a = [
    "as" => "zero",
    "bs" => "betta",
    "cs" => "gretta",
    "ds" => "delta",
    "es" => "creat"
];

function mixer(array $arr): array
{
    $flipArr = array_flip($arr);
    shuffle($arr);
    $result = [];
    foreach ($arr as  $vel) {
        $result[$vel] = $flipArr[$vel];
    }
    return array_flip($result);
}
var_dump (mixer($a));
