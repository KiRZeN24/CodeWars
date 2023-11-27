<?php

function isValidIP(string $str): bool
{
    // Dividir la cadena en octetos usando el punto como delimitador
    $octetos = explode('.', $str);

    // Verificamos si hay exactamente 4 octetos
    if (count($octetos) !== 4) {
        return false;
    }

    // Verificamos cada octeto
    foreach ($octetos as $octeto) {
        // Verifica que el octeto sea un número entero
        if (!ctype_digit($octeto)) {
            return false;
        }

        // Verificamos que el valor del octeto esté entre 0 y 255
        if ($octeto < 0 || $octeto > 255) {
            return false;
        }

        // Verificamos que no haya ceros a la izquierda del octeto
        if ($octeto[0] === '0' && strlen($octeto) > 1) {
            return false;
        }
    }

    return true;
}

?>