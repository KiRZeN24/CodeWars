<?php

function findShort($str)
{
    // Dividimos string en palabras
    $palabras = explode(' ', $str);

    // Inicializar la longitud mínima con un valor grande
    $TamanoMin = PHP_INT_MAX;

    // Iteramos sobre las palabras para encontrar la longitud mínima
    foreach ($palabras as $palabra) {
        // Actualizamos la longitud mínima si la longitud actual es menor
        $TamanoMin = min($TamanoMin, strlen($palabra));
    }

    // Devolvemos la longitud mínima encontrada
    return $TamanoMin;
}

?>