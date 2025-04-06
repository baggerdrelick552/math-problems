<?php
// Example PHP code related to mathematical operations and problem-solving

function solveMathProblem($mathProblem) {
    // This function solves a given mathematical problem.
    $result = null;
    try {
        $result = eval("return " . $mathProblem);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $result;
}

// Example usage:
$mathProblem1 = "2 + 3 * 5"; // Solve: 2 + 15
$result1 = solveMathProblem($mathProblem1); // Output will vary depending on the calculation

$mathProblem2 = "sqrt(9) - sqrt(4)"; // Solve: sqrt(3) + sqrt(1)
$result2 = solveMathProblem($mathProblem2); // Output will vary depending on the calculation
?>
