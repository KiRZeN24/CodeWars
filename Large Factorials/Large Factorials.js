function factorial(n) {
  if (n < 0) {
    return null;
  } else if (n === 0 || n === 1) {
    return "1";
  } else {
    let result = "1";
    for (let i = 2; i <= n; i++) {
      result = multiplyBigIntegers(result, i.toString());
    }
    return result;
  }
}

function multiplyBigIntegers(a, b) {
  let result = Array(a.length + b.length).fill(0);

  for (let i = a.length - 1; i >= 0; i--) {
    for (let j = b.length - 1; j >= 0; j--) {
      let temp = parseInt(a[i]) * parseInt(b[j]);
      let pos1 = i + j;
      let pos2 = i + j + 1;
      temp += result[pos2];

      result[pos1] += Math.floor(temp / 10);
      result[pos2] = temp % 10;
    }
  }

  // Eliminar cualquier cero inicial
  while (result[0] === 0) {
    result.shift();
  }

  return result.join("");
}