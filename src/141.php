<?php
// Problem 1: Area of a Rectangle
function rectangle_area($length, $width) {
    return $length * $width;
}

// Problem 2: Sum of Digits in a Number
function sum_digits($number) {
    return preg_replace('/\d/', '', strval($number));
}

// Problem 3: Prime Numbers between 1 and 50
function primes_between_1_and_50() {
    $prime_numbers = [];
    for ($i = 2; $i <= 50; $i++) {
        if (isPrime($i)) {
            $prime_numbers[] = $i;
        }
    }
    return $prime_numbers;
}

function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
