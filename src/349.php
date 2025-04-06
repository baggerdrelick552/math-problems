<?php
// Example PHP code to solve math problem from math-problems

function calculate($a, $b, $operation) {
    switch ($operation) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'divide':
            if ($b == 0) {
                return "Division by zero is not allowed.";
            }
            return $a / $b;
        default:
            return "Unknown operation";
    }
}

// Example usage
$a = 5;
$b = 3;
$result = calculate($a, $b, 'add');
echo "Result: $result\n";

$operation = 'divide';
$b = 0; // For division by zero check
$result = calculate($a, $b, $operation);
if ($result !== "Division by zero is not allowed.") {
    echo "Corrected result: $result\n";
} else {
    echo "Incorrect or error in the calculation.\n";
}
?>
