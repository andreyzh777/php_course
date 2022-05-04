<?php
$number = 5689;
function summNumber(int $chislo) : int
{
    $n = 0;
    while ($chislo)
    {
        $n += $chislo % 10;
        $chislo = intdiv ($chislo, 10);
    }
    if (intdiv($n, 10)) {
        $n = summNumber($n);
    }
    return $n;
}

echo summNumber($number) . PHP_EOL;