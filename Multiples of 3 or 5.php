<?php

function solution($number){
  if($number < 0){
    return 0;
  }
  
  $resultados = 0;
  for($i = 3; $i < $number; $i++){
    if($i%3 == 0 || $i%5 == 0){
      $resultados += $i;
    }
  }
  
  return $resultados;
}

?>