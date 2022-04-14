<?php


$a = [];
for ($i = 0; $i < 10; $a[$i] = $i++) ; //creat array 10 element

/**
 * @param array $arr Array to change
 * @param mixed $value Value to insert
 * @param int $n Insert position
 * @return void
 */
function insert_array(array &$arr, mixed $value, int $n): void
{
    $count = count($arr);
    if ($count < $n) {
        for ($i = $count; $i < $n; $i++) {
            $arr[$i] = null;
        }

        $arr[$n] = $value;
        return;
    }

    for ($i = $n; $i <= $count; $i++) {
        $temp = $arr[$i];
        $arr[$i] = $value;
        $value = $temp;
    }
    $arr[$i] = $value;
}

print_r($a);
insert_array($a, 15, 0);
print_r($a);
//foreach ($a as $key => $val) echo $val . PHP_EOL;