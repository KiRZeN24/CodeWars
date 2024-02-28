<?php

function sumProperDivisors($n)
{
    $sum = 1; // Inicializamos con 1 porque 1 es divisor propio de todos los números
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            $sum += $i;
            if ($i != $n / $i) {
                $sum += $n / $i;
            }
        }
    }
    return $sum;
}

function buddy($start, $limit)
{
    for ($n = $start; $n <= $limit; $n++) {
        $m = sumProperDivisors($n) - 1;
        if ($m > $n && sumProperDivisors($m) - 1 == $n) {
            return "$n $m";
        }
    }
    return "Nothing";
}

?>