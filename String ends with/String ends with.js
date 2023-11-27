function solution(str, ending){
    if (ending === '') {
    return true; // Si 'ending' es una cadena vacía, devolvemos true.
  }
  
    // Usamos el método slice para obtener una porción de 'str' con la misma longitud que 'ending' desde el final.
    // Luego, comparamos si esa porción es igual a 'ending'.
    if (str.slice(-ending.length) === ending) {
    return true; // Si son iguales, devolvemos true.
  } else {
    return false; // Si no son iguales, devolvemos false.
  }
}