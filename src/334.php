<?php
// This PHP script is designed to solve a variety of mathematical problems from the student's school's curriculum.
// It includes functions to check if a number is prime, calculate factorial, and perform basic arithmetic operations.

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function factorial($number) {
    if ($number < 2) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

// Example usage
echo "Is the number prime? (Enter a number to check): ";
$checkNumber = $_GET['check'];
if (!isPrime(intval($checkNumber))) {
    echo "The number is not prime.";
} else {
    echo "The number is prime.";
}
