<?php

function accum($s)
{
    $resultado = '';
    // Convertimos la cadena a mayúsculas
    $s = strtoupper($s);

    for ($i = 0; $i < strlen($s); $i++) {
        $resultado .= strtoupper($s[$i]) . str_repeat(strtolower($s[$i]), $i) . '-';
    }
    return rtrim($resultado, '-'); //Eliminamos el guion del final para devolver el resultado
}

?>