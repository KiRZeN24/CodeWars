<?php

function justify($str, $len)
{
    $words = explode(" ", $str); // Dividir la string en palabras
    $lines = [];
    $line = $words[0]; // Comenzar con la primera palabra
    for ($i = 1; $i < count($words); $i++) {
        $word = $words[$i];
        // Verificar si agregar la palabra excede la longitud permitida
        if (strlen($line) + strlen($word) + 1 <= $len) {
            $line .= " $word"; // Agregar palabra con un espacio
        } else {
            // Justificar la línea actual
            $lines[] = justifyLine($line, $len);
            $line = $word; // Comenzar nueva línea con la palabra actual
        }
    }
    // Agregar la última línea
    $lines[] = $line;
    return implode("\n", $lines); // Unir las líneas con salto de línea
}

function justifyLine($line, $len)
{
    $words = explode(" ", $line);
    $numWords = count($words);
    if ($numWords == 1 || strlen($line) == $len) {
        return $line; // No hay necesidad de justificar una sola palabra o línea completa
    }
    $numSpacesNeeded = $len - strlen($line); // Espacios necesarios para justificar
    $numGaps = $numWords - 1; // Número de espacios entre palabras
    $spacesPerGap = floor($numSpacesNeeded / $numGaps); // Espacios por cada espacio entre palabras
    $extraSpaces = $numSpacesNeeded % $numGaps; // Espacios adicionales que se distribuirán de izquierda a derecha

    $justifiedLine = $words[0]; // Comenzar con la primera palabra
    for ($i = 1; $i < $numWords; $i++) {
        // Agregar espacios según la distribución
        $spacesToAdd = $spacesPerGap + ($i <= $extraSpaces ? 1 : 0);
        $justifiedLine .= str_repeat(" ", $spacesToAdd) . $words[$i];
    }
    return $justifiedLine;
}

?>