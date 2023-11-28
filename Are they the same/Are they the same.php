<?php

function comp($a1, $a2)
{
    // Verificar si $a1 o $a2 son nulos

    if ($a1 === null || $a2 === null) {
        return false;
    }

    // Elevar al cuadrado cada elemento de $a1

    $cuadradoA1 = array_map(function ($x) {
        return $x * $x;
    }, $a1);

    // Ordenar ambos arrays

    sort($cuadradoA1);
    sort($a2);

    // Comprobar si los arrays ordenados son iguales

    return $cuadradoA1 == $a2;
}

?>