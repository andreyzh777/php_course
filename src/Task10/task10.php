<?php
$word = "China";

function changeChr (string $st) {
    $len = strlen($st)-1;
    $tempS = $st [$len];
    $st [$len] = $st [0];
    $st [0] = $tempS;
    return $st . PHP_EOL;
}

echo changeChr ($word);