function cakes(recipe, available) {
  let maxCakes = Infinity; //Inicializamos el número máximo de pastesles con infinito

  //Iteramos a través de cada ingrediente en la receta
  for (let ingredient in recipe) {
    //Verificamos so el ingrediente de la receta está disponible
    if (available.hasOwnProperty(ingredient)) {
      //Calculamos el número máximo de pasteles que se pueden hacer con el ingrediente
      const possibleCakes = Math.floor(
        available[ingredient] / recipe[ingredient]
      );
      //Actualizamos el número máximo de pasteles si es menor que el número actual
      if (possibleCakes < maxCakes) {
        maxCakes = possibleCakes;
      }
    } else {
      //Si falta algún ingrediente, establecemos el número máximo de pasteles en 0
      return 0;
    }
  }

  return maxCakes;
}
