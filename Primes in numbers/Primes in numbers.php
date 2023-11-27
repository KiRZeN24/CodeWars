<?php
function primeFactors($n)
{

    $resultado = "";

    for ($i = 2; $i <= $n; $i++) {

        $contador = 0;

        while ($n % $i == 0) {

            $n /= $i;

            $contador++;
        }

        if ($contador > 0) {

            $resultado .= "(" . $i;

            if ($contador > 1) {

                $resultado .= "**" . $contador;
            }

            $resultado .= ")";
        }
    }

    if ($n > 1) {

        // Si queda un factor primo mayor que 1

        $resultado .= "(" . $n . ")";
    }

    return $resultado;
}
?>