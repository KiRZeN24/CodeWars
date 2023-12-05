function twoSum(numbers, target) {
  for (let i = 0; i < numbers.length - 1; i++) {
    for (let x = i + 1; x < numbers.length; x++) {
      if (numbers[i] + numbers[x] === target) {
        return [i, x];
      }
    }
  }
}