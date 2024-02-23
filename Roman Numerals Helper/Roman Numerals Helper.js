class RomanNumerals {
  static toRoman(num) {
    const romanMap = [
      { value: 1000, numeral: "M" },
      { value: 900, numeral: "CM" },
      { value: 500, numeral: "D" },
      { value: 400, numeral: "CD" },
      { value: 100, numeral: "C" },
      { value: 90, numeral: "XC" },
      { value: 50, numeral: "L" },
      { value: 40, numeral: "XL" },
      { value: 10, numeral: "X" },
      { value: 9, numeral: "IX" },
      { value: 5, numeral: "V" },
      { value: 4, numeral: "IV" },
      { value: 1, numeral: "I" },
    ];

    let result = "";
    for (let i = 0; i < romanMap.length; i++) {
      while (num >= romanMap[i].value) {
        result += romanMap[i].numeral;
        num -= romanMap[i].value;
      }
    }
    return result;
  }

  static fromRoman(str) {
    const romanMap = {
      M: 1000,
      CM: 900,
      D: 500,
      CD: 400,
      C: 100,
      XC: 90,
      L: 50,
      XL: 40,
      X: 10,
      IX: 9,
      V: 5,
      IV: 4,
      I: 1,
    };

    let result = 0;
    for (let i = 0; i < str.length; i++) {
      const currentNumeral = str[i];
      const currentValue = romanMap[currentNumeral];
      const nextValue = romanMap[str[i + 1]];

      if (nextValue && nextValue > currentValue) {
        result += nextValue - currentValue;
        i++;
      } else {
        result += currentValue;
      }
    }
    return result;
  }
}