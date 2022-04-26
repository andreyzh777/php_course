<?php
$a = [
    "as" => "zero",
    "bs" => "betta",
    "cs" => "gretta",
    "ds" => "delta",
    "es" => "creat"
];

function myShuffle(array $arr): array
{
    $result = [];
    $temp = array_flip($arr);
    shuffle($arr);
//    $arr = array_flip($arr);

    foreach ($arr as $val) {
        $result[$val] = $temp[$val];
    }

    return array_flip($result);
}

var_dump(myShuffle($a));

//myShuffle($a);