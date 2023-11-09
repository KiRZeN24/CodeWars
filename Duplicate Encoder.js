function duplicateEncode(word) {
  // Creamos un objeto para almacenar la frecuencia de cada carácter

  let contador = {};

  // Contar la frecuencia de cada carácter

  for (let char of word) {
    // Convertir el carácter a minúsculas antes de contar

    let minusculas = char.toLowerCase();

    contador[minusculas] = (contador[minusculas] || 0) + 1;
  }

  // Creamos una variable vacía para almacenar el resultado

  let resultado = "";

  // Iterar através de cada carácter de la palabra original

  for (let char of word) {
    // Convertir el carácter a minúsculas antes de verificar la frecuencia

    let minusculas = char.toLowerCase();

    // Si el carácter aparece solo una vez, agregamos "(" al resultado

    if (contador[minusculas] === 1) {
      resultado += "(";
    }

    // Si el carácter aparece más de una vez, agregamos ")" al resultado
    else {
      resultado += ")";
    }
  }

  return resultado;
}