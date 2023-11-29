<?php

function listSquared($m, $n)
{
    $resultado = [];

    for ($i = $m; $i <= $n; $i++) {
        $divisor = findDivisors($i);
        $sumaCuadrados = array_sum(array_map(function ($x) {
            return $x * $x;
        }, $divisor));

        if (isSquare($sumaCuadrados)) {
            $resultado[] = [$i, $sumaCuadrados];
        }
    }

    return $resultado;
}

function findDivisors($numero)
{
    $divisor = [];
    $raizCuadrada = sqrt($numero);
    for ($i = 1; $i <= $raizCuadrada; $i++) {
        if ($numero % $i === 0) {
            $divisor[] = $i;
            $divisor[] = $numero / $i;
        }
    }

    return array_unique($divisor); // Elimina duplicacdos, si lo hay.

}


function isSquare($numero)
{
    $raiz = (int) sqrt($numero);
    return $raiz * $raiz === $numero;
}
?>