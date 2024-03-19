function sumIntervals(intervals) {
  // Ordenar los intervalos por el inicio
  intervals.sort((a, b) => a[0] - b[0]);

  // Inicializar la suma y el intervalo previo
  let sum = 0;
  let prevInterval = intervals[0];

  // Recorrer los intervalos
  for (let i = 1; i < intervals.length; i++) {
    const currentInterval = intervals[i];

    // Si hay solapamiento con el intervalo previo
    if (currentInterval[0] <= prevInterval[1]) {
      // Actualizar el intervalo previo para fusionarlos
      prevInterval[1] = Math.max(prevInterval[1], currentInterval[1]);
    } else {
      // Si no hay solapamiento, agregar la longitud del intervalo previo a la suma
      sum += prevInterval[1] - prevInterval[0];
      // Actualizar el intervalo previo al intervalo actual
      prevInterval = currentInterval;
    }
  }

  // Agregar la longitud del último intervalo a la suma
  sum += prevInterval[1] - prevInterval[0];

  return sum;
}