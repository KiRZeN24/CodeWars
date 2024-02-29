<?php

function sudoku(array $puzzle): ?array
{
    $emptyCell = findEmptyCell($puzzle);

    // Si no hay celdas vacías, hemos completado el Sudoku
    if ($emptyCell === null) {
        return $puzzle;
    }

    // Intentamos números del 1 al 9 en la celda vacía
    for ($num = 1; $num <= 9; $num++) {
        if (isValidMove($puzzle, $emptyCell[0], $emptyCell[1], $num)) {
            $puzzle[$emptyCell[0]][$emptyCell[1]] = $num;

            // Llamada recursiva para completar el Sudoku
            $result = sudoku($puzzle);
            if ($result !== null) {
                return $result;
            }

            // Si no se puede completar con este número, lo restablecemos
            $puzzle[$emptyCell[0]][$emptyCell[1]] = 0;
        }
    }

    // Si no se puede completar el Sudoku, devolvemos null
    return null;
}

// Encuentra la próxima celda vacía en el rompecabezas Sudoku
function findEmptyCell(array $puzzle): ?array
{
    for ($row = 0; $row < 9; $row++) {
        for ($col = 0; $col < 9; $col++) {
            if ($puzzle[$row][$col] === 0) {
                return [$row, $col];
            }
        }
    }
    return null;
}

// Verifica si un movimiento es válido
function isValidMove(array $puzzle, int $row, int $col, int $num): bool
{
    // Verifica si el número ya está en la fila o columna
    for ($i = 0; $i < 9; $i++) {
        if ($puzzle[$row][$i] === $num || $puzzle[$i][$col] === $num) {
            return false;
        }
    }

    // Verifica si el número ya está en el cuadrante 3x3
    $startRow = $row - $row % 3;
    $startCol = $col - $col % 3;
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($puzzle[$i + $startRow][$j + $startCol] === $num) {
                return false;
            }
        }
    }

    return true;
}

?>