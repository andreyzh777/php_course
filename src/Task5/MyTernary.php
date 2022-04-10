<?php


$a = [];
for ($i = 1; $i < 11; $a[$i-1] = $i++) ; //creat array 10 element

function insert_array(&$b, $Val, $n) //Val - вставляемое значение,  n - в какую часть массива, от 0
{
   $k= count ($b);
   if ($k<$n) {for ($i = $k; $i<$n; $i++) $b[$i]=0;
                $b[$n]= $Val;}
   else
   {
       for ($i = $n; $i<=$k; $i++)
       {
           $tem=$b[$i];
           $b[$i]=$Val;
           $Val=$tem;
       }
       $b[$i]=$Val;
   }
}

insert_array($a, 15, 0);
foreach ($a as $key => $val) echo $val. PHP_EOL;