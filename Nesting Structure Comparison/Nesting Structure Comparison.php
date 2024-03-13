<?php

function same_structure_as(array $a, array $b): bool
{
    // Verificar si ambos argumentos son arrays
    if (!is_array($a) || !is_array($b)) {
        return false;
    }

    // Verificar si las longitudes de los arrays son diferentes
    if (count($a) !== count($b)) {
        return false;
    }

    // Verificar la estructura de anidación y longitud correspondiente
    foreach ($a as $key => $value) {
        // Si uno es un array y el otro no, o viceversa, entonces no tienen la misma estructura
        if ((is_array($value) && !is_array($b[$key])) || (!is_array($value) && is_array($b[$key]))) {
            return false;
        }

        // Si ambos son arrays, verificar su estructura interna recursivamente
        if (is_array($value) && is_array($b[$key])) {
            if (!same_structure_as($value, $b[$key])) {
                return false;
            }
        }
    }

    // Si pasan todas las condiciones anteriores, los arrays tienen la misma estructura
    return true;
}

?>