function findOdd(A) {
  let resultado = 0;

  for (let i = 0; i < A.length; i++) {
    resultado ^= A[i];
  }
  return resultado;
}