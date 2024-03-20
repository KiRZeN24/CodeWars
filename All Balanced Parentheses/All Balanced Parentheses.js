function balancedParens(n) {
  const result = [];

  // Función recursiva para generar todas las combinaciones
  function generateParentheses(current, open, close) {
    if (current.length === 2 * n) {
      result.push(current);
      return;
    }

    if (open < n) {
      generateParentheses(current + "(", open + 1, close);
    }

    if (close < open) {
      generateParentheses(current + ")", open, close + 1);
    }
  }

  generateParentheses("", 0, 0);

  return result;
}