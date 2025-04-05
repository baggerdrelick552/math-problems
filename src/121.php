<?php
// Example PHP code for mathematical operations and logic

// Addition
echo "The sum of 5 and 10 is: " . (5 + 10);

// Subtraction
echo "The difference between 20 and 8 is: " . (20 - 8);

// Multiplication
echo "The product of 3 and 6 is: " . (3 * 6);

// Division
if ($value > 0) {
    echo "The value $value squared is: " . $value * $value;
} else {
    echo "Invalid input for square operation.";
}

// Example mathematical problem solving using code

function calculateSum($a, $b) {
    return $a + $b;
}

$sum = calculateSum(5, 10);
echo "The sum of 5 and 10 is: " . $sum;

function calculateDifference($a, $b) {
    return $a - $b;
}

$difference = calculateDifference(20, 8);
echo "The difference between 20 and 8 is: " . $difference;

function multiply($a, $b) {
    return $a * $b;
}

$result = multiply(3, 6);
echo "The product of 3 and 6 is: " . $result;

$squareRoot = sqrt(9);
echo "The square root of 9 is: " . $squareRoot;

function checkPrime($number) {
    if ($number == 1) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

$primeNumber = checkPrime(5);
echo "Is 5 a prime number? " . $primeNumber;

