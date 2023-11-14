<?php

function isSquare($n)
{
    // Verificar si la raíz cuadrada es un número entero
    return $n >= 0 && intval(sqrt($n)) ** 2 === $n; // Redondeamos la raíz cuadrada a un entero
}

?>