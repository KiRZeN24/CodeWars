<?php

function determinant(array $matrix): int
{
    $size = count($matrix);

    // Caso: 1x1
    if ($size === 1) {
        return $matrix[0][0];
    }

    // Caso: 2x2
    if ($size === 2) {
        return ($matrix[0][0] * $matrix[1][1]) - ($matrix[0][1] * $matrix[1][0]);
    }

    // Calcular el determinante
    $determinante = 0;

    for ($i = 0; $i < $size; $i++) {
        $menor = getMinorMatrix($matrix, $i, 0);
        $determinante += (($i % 2 === 0) ? 1 : -1) * $matrix[$i][0] * determinant($menor);
    }

    return $determinante;
}

// Función para obtener la matriz menor eliminando una fila y una columna
function getMinorMatrix(array $matrix, int $fila, int $columna): array
{
    $menor = [];

    $size = count($matrix);

    for ($i = 0; $i < $size; $i++) {
        if ($i !== $fila) {
            $filaMenor = [];
            for ($x = 0; $x < $size; $x++) {
                if ($x !== $columna) {
                    $filaMenor[] = $matrix[$i][$x];
                }
            }

            $menor[] = $filaMenor;
        }
    }

    return $menor;
}

?>