function solution(roman) {
  // Creamos un objeto que contenga los valores de cada símbolo romano

  const numerosRomanos = {
    I: 1,
    V: 5,
    X: 10,
    L: 50,
    C: 100,
    D: 500,
    M: 1000,
  };

  // Iniciamos el resultado

  let resultado = 0;

  // Recorremos la cadena de números romanos de derecha a izquierda

  for (let i = roman.length - 1; i >= 0; i--) {
    // Obtener el valor numérico del símbolo romano actual

    const numeroActual = roman[i];
    const valor = numerosRomanos[numeroActual];

    // Si el valor actual es menos que el siguiente, restar en lugar de sumar

    if (i < roman.length - 1 && valor < numerosRomanos[roman[i + 1]]) {
      resultado -= valor;
    } else {
      resultado += valor;
    }
  }

  return resultado;
}