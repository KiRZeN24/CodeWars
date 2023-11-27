function validBraces(braces) {
  const acumular = [];
  const parejas = {
    "(": ")",
    "[": "]",
    "{": "}",
  };

  for (let i = 0; i < braces.length; i++) {
    const corcheteActual = braces[i];

    if (
      corcheteActual === "(" ||
      corcheteActual === "[" ||
      corcheteActual === "{"
    ) {
      acumular.push(corcheteActual);
    } else {
      // Si acumular está vacío o el último elemento en acumular no forma un par con el corchete actual, devuelvo false
      if (acumular.length === 0 || parejas[acumular.pop()] !== corcheteActual) {
        return false;
      }
    }
  }

  // La secuencia es válida si acumular está vació al final
  return acumular.length === 0;
}