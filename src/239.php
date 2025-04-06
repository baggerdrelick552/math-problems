<?php
// Problem 1: Sum of natural numbers up to n
function sumNaturalNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}

// Problem 2: Fibonacci sequence generation
function fibonacciSequence($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    }

    // Generate the nth Fibonacci number
    return fibonacciSequence($n - 1) + fibonacciSequence($n - 2);
}

// Problem 3: Reverse a string
function reverseString($input) {
    $input = strrev($input);
    return $input;
}
