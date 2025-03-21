// JavaScript function to check if the matrix is symmetric

function checkSymmetry() {
  // Step 1: Get the matrix input from the textarea
  let input = document.getElementById("matrixInput").value.trim();

  // Step 2: Convert input into a 2D array (matrix)
  let matrix = input.split("\n").map(row => row.trim().split(/\s+/).map(Number));

  // Step 3: Check if the matrix is square (rows = columns)
  let rowCount = matrix.length;
  let colCount = matrix[0].length;

  if (rowCount !== colCount) {
      document.getElementById("result").innerHTML = "The matrix is NOT square, so it can't be symmetric.";
      return;
  }

  // Step 4: Check for symmetry (matrix[i][j] == matrix[j][i])
  let isSymmetric = true;

  for (let i = 0; i < rowCount; i++) {
      for (let j = 0; j < colCount; j++) {
          if (matrix[i][j] !== matrix[j][i]) {
              isSymmetric = false;
              break;
          }
      }
      if (!isSymmetric) break;
  }

  // Step 5: Display the result
  if (isSymmetric) {
      document.getElementById("result").innerHTML = "The matrix is SYMMETRIC!";
  } else {
      document.getElementById("result").innerHTML = "The matrix is NOT symmetric.";
  }
}
