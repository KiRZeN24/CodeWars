var Sudoku = function (data) {
  //   Private methods
  // -------------------------
  function hasDuplicates(array) {
    var valuesSoFar = {};
    for (var i = 0; i < array.length; ++i) {
      var value = array[i];
      if (value in valuesSoFar) {
        return true;
      }
      valuesSoFar[value] = true;
    }
    return false;
  }

  //   Public methods
  // -------------------------
  return {
    isValid: function () {
      if (data.length === 1) {
        return data[0][0] === 1;
      }

      // Check rows
      for (var i = 0; i < data.length; i++) {
        if (hasDuplicates(data[i])) {
          return false;
        }
      }

      // Check columns
      for (var j = 0; j < data.length; j++) {
        var column = [];
        for (var k = 0; k < data.length; k++) {
          column.push(data[k][j]);
        }
        if (hasDuplicates(column)) {
          return false;
        }
      }

      // Check little squares
      var squareSize = Math.sqrt(data.length);
      for (var row = 0; row < data.length; row += squareSize) {
        for (var col = 0; col < data.length; col += squareSize) {
          var square = [];
          for (var m = row; m < row + squareSize; m++) {
            for (var n = col; n < col + squareSize; n++) {
              square.push(data[m][n]);
            }
          }
          if (hasDuplicates(square)) {
            return false;
          }
        }
      }

      return true;
    },
  };
};