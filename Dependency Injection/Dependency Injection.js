var DI = function (dependency) {
  this.dependency = dependency;
};

// Debería devolver una nueva función con las dependencias resueltas
DI.prototype.inject = function (func) {
  var dependencies = this.dependency;
  var argNames = func.toString().match(/^function\s*[^\(]*\(\s*([^\)]*)\)/m);

  if (!argNames || !argNames[1]) {
    // Si la función no tiene argumentos especificados, simplemente devolvemos la función original
    return func;
  }

  argNames = argNames[1].split(",");

  var injectedArgs = argNames.map(function (arg) {
    return dependencies[arg.trim()];
  });

  return function () {
    return func.apply(null, injectedArgs);
  };
};