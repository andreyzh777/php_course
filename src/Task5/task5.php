<?php

function insert(array $arr, mixed $value, int $position = 0): array
{
    $count = count($arr);
    if ($position > $count) {
        $arr[] = $value;

        return $arr;
    }

    $result = [];
    for ($i = 0; $i < $count; $i++) {
        if ($i === $position) {
            $result[] = $value;
        }

        $result[] = $arr[$i];
    }

    return $result;
}

$input = [];
for ($i = 0; $i < 10; $i++) {
    $input[$i] = $i;
}

print_r($input);
print_r(insert($input, 100, 3));

