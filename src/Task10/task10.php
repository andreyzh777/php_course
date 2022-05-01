<?php
$word = "China";

function changeChr (string $st)   string
{
    $len = strlen($st)-1;
    $tempS = $st[$len];
    $st[$len] = $st[0];
    $st[0] = $tempS;
    return $st;
}

echo changeChr ($word) . PHP_EOL;