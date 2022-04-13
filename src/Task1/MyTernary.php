<?php


declare(strict_types=1);

/**
 * Tests whether a number is greater than 30, 20 or 10 using ternary operator.
 *
 * @param int $n Test number
 *
 * @return string
 * @author Dzianis Kotau <me@dzianiskotau.com>
 *
 */
function myTernary(int $n): string
{
    $r = $n > 30
        ? 'greater than 30'
        : ($n > 20 ? 'greater than 20'
            : ($n > 10 ? 'greater than 10' : 'less or equal to 10'));

    return ($n . ' ' . $r);
}

echo myTernary(15) . PHP_EOL;