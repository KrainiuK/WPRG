<?php
function sum($num)
{
    $sum = 0;
    $tmp = $num;
    while ($sum <= 10) {
        while ($num > 0) {
            $sum += $num % 10;
            $num = floor($num / 10);

        }
        $num = $tmp;
    }
    return $sum;
}

echo sum(124);