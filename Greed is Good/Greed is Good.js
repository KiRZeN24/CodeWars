function score(dice) {
  // Creamos un objeto para contar las ocurrencias de cada número
  const cuenta = {};

  // Contar las ocurrencias
  dice.forEach((num) => {
    cuenta[num] = (cuenta[num] || 0) + 1;
  });

  // Calcular la puntuación según las reglas
  let puntuacion = 0;

  for (let num = 1; num <= 6; num++) {
    const count = cuenta[num] || 0;

    if (num === 1) {
      puntuacion += Math.floor(count / 3) * 1000 + (count % 3) * 100;
    } else if (num === 5) {
      puntuacion += Math.floor(count / 3) * 500 + (count % 3) * 50;
    } else {
      puntuacion += Math.floor(count / 3) * num * 100;
    }
  }

  return puntuacion;
}