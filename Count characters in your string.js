function count(string) {
  // Creamos un objeto para almacenar la frecuencia de los caracteres

  let cuentaCaracter = {};

  // Recorremos cada carácter en el string

  for (let i = 0; i < string.length; i++) {
    // Obtenemos el carácter actual

    let caracter = string.charAt(i);

    // Verificamos si el  carácter ya está en el objeto cuentaCaracter

    if (cuentaCaracter[caracter]) {
      // Si es si, incrementamos su contador

      cuentaCaracter[caracter]++;
    } else {
      // Si es no, inicializamos su contador en 1

      cuentaCaracter[caracter] = 1;
    }
  }

  // Devolvermos el objeto con la frecuenta de caracteres

  return cuentaCaracter;
}