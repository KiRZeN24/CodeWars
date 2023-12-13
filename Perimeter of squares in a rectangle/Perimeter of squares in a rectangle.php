<?php

function perimeter($n)
{
    $fibonacci = [1, 1];

    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    $suma = array_sum($fibonacci);

    return 4 * $suma;
}