<?php 

function square_digits($num): int {
      $resultado = "";
        $array  = array_map('intval', str_split($num));
      foreach ($array as $number){
        $resultado .= $number*$number;
    
      }
    
      return $resultado;
    }
    
    ?>