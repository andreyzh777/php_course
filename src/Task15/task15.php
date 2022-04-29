<?php
function findElements(array $a): array
{
    $tempA = [];
    $kolElementA = count($a);
    for ($i=0, $j=1; $i < $kolElementA; $i++, $j++)
    {
        if ($a[$i] != $j){
            do
            {
                $tempA[$j - 1] = $j;
                $j++;
            }
            while ($a[$i] != $j);
        }
    }

    return $tempA;
}

$a = [1,2,3,6,7,8,11];
var_dump( findElements($a));
