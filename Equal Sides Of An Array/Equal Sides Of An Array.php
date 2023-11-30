<?php

function find_even_index($arr)
{

    $total = array_sum($arr);
    $sumaIzq = 0;

    for ($i = 0; $i < count($arr); $i++) {
        $total -= $arr[$i];

        if ($sumaIzq == $total) {
            return $i;
        }

        $sumaIzq += $arr[$i];
    }

    return -1;
}
?>