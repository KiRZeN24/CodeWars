function generateHashtag(str) {
  // Verificar si str está vacía o si contiene solo espacios
  if (!str.trim()) {
    return false;
  }

  // Dividir la cadena en palabras y eliminar las palabras vacías
  const palabras = str.trim().split(/\s+/);

  //Hacer la primera letra de cada palabra en mayúscula y unirlas
  const hashtag = palabras
    .map((palabra) => palabra.charAt(0).toUpperCase() + palabra.slice(1))
    .join("");

  // Verificar si el hashtag excede los 140 caracteres, sumamos 1 para considerar el '#' al principio
  if (hashtag.length + 1 > 140) {
    return false;
  } else {
    return "#" + hashtag;
  }
}
