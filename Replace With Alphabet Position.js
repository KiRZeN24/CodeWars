function alphabetPosition(text) {
  //Creamos un array
  let resultado = [];

  for (let i = 0; i < text.length; i++) {
    const letra = text[i].toLowerCase(); //Covertimos las letras en minusculas
    if (letra >= "a" && letra <= "z") {
      const posicion = letra.charCodeAt(0) - "a".charCodeAt(0) + 1; //Comprobamos desde a que letra es y se va sumando 1 por cada posición
      resultado.push(posicion); //Añadimos la posición al array
    }
  }

  return resultado.join(" ");
}
