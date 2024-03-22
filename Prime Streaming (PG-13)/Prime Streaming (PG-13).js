class Primes {
  static *stream() {
    let primes = [];
    let num = 2;

    while (true) {
      let isPrime = true;
      for (let prime of primes) {
        if (num % prime === 0) {
          isPrime = false;
          break;
        }
        if (prime * prime > num) break;
      }
      if (isPrime) {
        yield num;
        primes.push(num);
      }
      num++;
    }
  }
}