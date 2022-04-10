<?php

Function add_inc($d, $Count=1)
{
    $First_S=$d[0];
    $Chek1= (int) ($d[1]+$d[2]);
    for ($i=0; $i<$Count; $i++, $Chek1++)

        if ($Chek1>9) echo $First_S.$Chek1. PHP_EOL;
            else  echo $First_S.'0'.$Chek1. PHP_EOL;
}

add_inc('A01', 150);