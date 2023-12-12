<?php

function loop_size(Node $node): int
{
    $lento = $node->getNext();
    $rapido = $node->getNext()->getNext();

    while ($lento !== $rapido) {
        $lento = $lento->getNext();
        $rapido = $rapido->getNext()->getNext();
    }

    $longitud = 1;
    $rapido = $rapido->getNext();

    while ($lento !== $rapido) {
        $rapido = $rapido->getNext();
        $longitud++;
    }

    return $longitud;
}
