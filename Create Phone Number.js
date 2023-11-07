function createPhoneNumber(numbers) {
  if (numbers.length !== 10) {
    return "Por favor introduzca 10 números.";
  }
  const pais = numbers.slice(0, 3).join("");
  const inicio = numbers.slice(3, 6).join("");
  const final = numbers.slice(6).join("");

  return `(${pais}) ${inicio}-${final}`;
}
