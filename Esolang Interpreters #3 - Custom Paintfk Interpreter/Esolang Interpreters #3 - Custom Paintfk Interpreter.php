<?php

function interpreter(string $code, int $iterations, int $width, int $height): string
{
    // Inicializar la cuadrícula de datos
    $dataGrid = array_fill(0, $height, array_fill(0, $width, 0));
    $pointerX = 0;
    $pointerY = 0;
    $direction = 'e'; // Comenzar moviéndose hacia el este

    $codeLength = strlen($code);
    $codeIndex = 0;
    $iterationCount = 0;

    while ($iterationCount < $iterations && $codeIndex < $codeLength) {
        $command = $code[$codeIndex];

        // Verificar si el comando es válido
        if (in_array($command, ['n', 'e', 's', 'w', '*', '[', ']'])) {
            // Manejar el comando normalmente
            switch ($command) {
                case 'n':
                    $pointerY = ($pointerY - 1 + $height) % $height; // Movimiento hacia el norte
                    break;
                case 'e':
                    $pointerX = ($pointerX + 1) % $width; // Movimiento hacia el este
                    break;
                case 's':
                    $pointerY = ($pointerY + 1) % $height; // Movimiento hacia el sur
                    break;
                case 'w':
                    $pointerX = ($pointerX - 1 + $width) % $width; // Movimiento hacia el oeste
                    break;
                case '*':
                    $dataGrid[$pointerY][$pointerX] = 1 - $dataGrid[$pointerY][$pointerX]; // Cambiar el bit en la celda actual
                    break;
                case '[':
                    // Si el bit en la celda actual es 0, salta al comando después del siguiente ']'
                    if ($dataGrid[$pointerY][$pointerX] == 0) {
                        $openBracketCount = 1;
                        while ($openBracketCount > 0) {
                            $codeIndex++;
                            if ($code[$codeIndex] == '[') {
                                $openBracketCount++;
                            } elseif ($code[$codeIndex] == ']') {
                                $openBracketCount--;
                            }
                        }
                    }
                    break;
                case ']':
                    // Si el bit en la celda actual es diferente de 0, salta al comando después del anterior '['
                    if ($dataGrid[$pointerY][$pointerX] != 0) {
                        $closeBracketCount = 1;
                        while ($closeBracketCount > 0) {
                            $codeIndex--;
                            if ($code[$codeIndex] == ']') {
                                $closeBracketCount++;
                            } elseif ($code[$codeIndex] == '[') {
                                $closeBracketCount--;
                            }
                        }
                    }
                    break;
            }
            // Incrementar el índice del código
            $codeIndex++;
        } else {
            // Si el comando no es válido, simplemente pasar al siguiente carácter
            $codeIndex++;
            continue;
        }

        // Incrementar el contador de iteraciones si se procesó un comando válido
        $iterationCount++;
    }

    // Convertir la cuadrícula de datos en una cadena de salida
    $output = '';
    foreach ($dataGrid as $row) {
        $output .= implode('', $row) . "\r\n";
    }

    return rtrim($output); // Eliminar el último CRLF redundante
}

?>