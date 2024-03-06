function longestSlideDown(pyramid) {
  // Iteramos desde la segunda fila desde la parte inferior de la pirámide hacia arriba
  for (let i = pyramid.length - 2; i >= 0; i--) {
    // Iteramos sobre los números en la fila actual de la pirámide
    for (let j = 0; j <= i; j++) {
      // Actualizamos cada número en la fila actual sumando el número actual y el máximo entre los dos números en la siguiente fila
      pyramid[i][j] += Math.max(pyramid[i + 1][j], pyramid[i + 1][j + 1]);
    }
  }
  // El número en la cima de la pirámide ahora contendrá la suma máxima posible
  return pyramid[0][0];
}