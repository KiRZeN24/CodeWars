<?php

function part($n)
{
    $partitions = enum($n);
    $products = [];

    // Calcular el producto
    foreach ($partitions as $partition) {
        $product = array_product($partition);
        if (!in_array($product, $products)) {
            $products[] = $product;
        }
    }

    sort($products);

    // Calcular el rango
    $range = end($products) - reset($products);

    // Calcular el promedio
    $average = array_sum($products) / count($products);

    // Calcular la mediana
    $count = count($products);
    $middle = (int)($count / 2);
    $median = $count % 2 === 0 ? ($products[$middle - 1] + $products[$middle]) / 2 : $products[$middle];

    // Formatear el resultado
    $result = sprintf("Range: %d Average: %.2f Median: %.2f", $range, $average, $median);

    return $result;
}

// Función para generar las particiones
function enum($n)
{
    $partitions = [];
    generatePartitions($n, $n, [], $partitions);
    return $partitions;
}

function generatePartitions($n, $max, $current, &$partitions)
{
    if ($n == 0) {
        $partitions[] = $current;
        return;
    }

    for ($i = min($n, $max); $i >= 1; $i--) {
        generatePartitions($n - $i, $i, array_merge($current, [$i]), $partitions);
    }
}

?>