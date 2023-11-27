function isPangram(string) {
  // Convertimos el string a minúsculas para hacer la comprobación

  const stringAminusculas = string.toLowerCase();

  // Creamos un conjunto (Set) para almacenar la letras únicas presentes en el string

  const letrasUnicas = new Set();

  // Iteramos sobre cada carácter del string

  for (const caracter of stringAminusculas) {
    // Verificamos si el carácter es una letra y lo añadimos  al conjunto

    if (/[a-z]/.test(caracter)) {
      letrasUnicas.add(caracter);
    }
  }

  // Comparamos la cantidad de letras únicas con la cantidad total de letras del abecedario (26)

  return letrasUnicas.size === 26;
}