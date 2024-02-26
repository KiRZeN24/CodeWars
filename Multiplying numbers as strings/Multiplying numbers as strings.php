<?php

function multiply(string $a, string $b): string
{
    // Convierte los strings a un array de dígitos
    $num1 = str_split(strrev($a));
    $num2 = str_split(strrev($b));

    // Inicializa un array para el resultado
    $result = array_fill(0, strlen($a) + strlen($b), 0);

    // Realiza la multiplicación de los dígitos
    foreach ($num1 as $i => $digit1) {
        foreach ($num2 as $j => $digit2) {
            $result[$i + $j] += $digit1 * $digit2;
            $result[$i + $j + 1] += intdiv($result[$i + $j], 10);
            $result[$i + $j] %= 10;
        }
    }

    // Elimina los ceros a la izquierda del resultado
    while (count($result) > 1 && end($result) == 0) {
        array_pop($result);
    }

    // Retorna el resultado como string
    return implode("", array_reverse($result));
}

?>