<?php

function dblLinear($n)
{
    $u = [1];
    $x = 0;
    $y = 0;

    while (count($u) <= $n) {
        $nextX = 2 * $u[$x] + 1;
        $nextY = 3 * $u[$y] + 1;

        if ($nextX < $nextY) {
            $u[] = $nextX;
            $x++;
        } elseif ($nextX > $nextY) {
            $u[] = $nextY;
            $y++;
        } else {
            $u[] = $nextX;
            $x++;
            $y++;
        }
    }

    return $u[$n];
}

?>