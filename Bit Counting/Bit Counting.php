<?php

function countBits($n) 
{
  //Convertimos el numero en binario
  $binario = decbin($n);
  
  //Contamos los 1 que hay en la representación binaria
  $contador = substr_count($binario, '1');
  
  //Devolvemos el resultado
  return $contador;
  }

  ?>