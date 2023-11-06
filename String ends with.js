function solution(str, ending) {
  // Usamos el método slice para obtener una porción de 'str' con la misma longitud que 'ending' desde el final.
  // Luego, comparamos si esa porción es igual a 'ending'.
  if (str.slice(-ending.length) === ending) {
    return true; // Si son iguales, devolvemos true.
  } else {
    return false; // Si no son iguales, devolvemos false.
  }
}