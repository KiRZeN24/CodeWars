function bouncingBall(h, bounce, window) {
  // Comprobamos si se cumplen las condiciones

  if (h > 0 && bounce > 0 && bounce < 1 && window < h) {
    let cantidadVisto = 1; // Caída inicial
    let altura = h;

    while (altura * bounce > window) {
      altura *= bounce; // Rebote
      cantidadVisto += 2; // La pelota pasa frente a la ventada dos veces (subida y bajada)
    }

    return cantidadVisto;
  } else {
    return -1; // Condiciones no cumplidas
  }
}