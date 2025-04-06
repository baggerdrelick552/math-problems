<?php
// Problem 1: Sum of numbers between 1 and n
function sumNumbersBetween($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

// Example usage:
$number = 5;
$result = sumNumbersBetween($number);
echo "The sum of numbers between 1 and {$number} is: " . $result;

// Problem 2: Factorial of a number
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Example usage:
$n = 5;
$factorialResult = factorial($n);
echo "The factorial of {$n} is: " . $factorialResult;
?>
