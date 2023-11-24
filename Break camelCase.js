function solution(string) {
  // Utilizamos una expresión regular para encontrar las mayúsculas y agregar un espacio antes de ellas
  return string.replace(/([A-Z])/g, " $1");
}