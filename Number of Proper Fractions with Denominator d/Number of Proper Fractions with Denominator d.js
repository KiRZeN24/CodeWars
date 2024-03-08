function properFractions(d) {
  if (d === 1) return 0;

  let result = d;
  let n = d;

  for (let i = 2; i * i <= d; i++) {
    if (n % i === 0) {
      while (n % i === 0) {
        n /= i;
      }
      result -= result / i;
    }
  }

  if (n > 1) {
    result -= result / n;
  }

  return result;
}