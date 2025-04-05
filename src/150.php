<?php
// Problem 1: Sum of natural numbers from 1 to n
function sumNaturalNumbers($n) {
    return $n * ($n + 1) / 2;
}

// Problem 2: Greatest common divisor (GCD)
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

// Problem 3: Reverse a number
function reverseNumber($number) {
    return (int) strrev(strval($number));
}

// Problem 4: Factorize a number into its prime factors
function factorize($number) {
    $primeFactors = [];
    for ($i = 2; $i <= $number; $i++) {
        if ($number % $i == 0) {
            while ($number % $i === 0) {
                array_push($primeFactors, $i);
                $number /= $i;
            }
        }
    }
    return $primeFactors;
}

// Problem 5: Find the smallest prime factor
function smallestPrimeFactor($number) {
    for ($i = 2; $i <= $number; $i++) {
        if ($number % $i === 0 && is_prime($i)) {
            return $i;
        }
    }
}

// Problem 6: Generate all prime numbers up to n
function generatePrimesUpTo($n) {
    $primes = [];
    for ($candidate = 2; $candidate <= $n; $candidate++) {
        if (is_prime($candidate)) {
            array_push($primes, $candidate);
        }
    }
    return $primes;
}

// Problem 7: Compute the nth Fibonacci number
function fibonacci($n) {
    $a = 0;
    $b = 1;
    for ($i = 2; $i <= $n; $i++) {
        $temp = $a + $b;
        $a = $b;
        $b = $temp;
    }
    return $b;
}

// Problem 8: Check if a number is a palindrome
function isPalindrome($number) {
    $strNumber = strval($number);
    return $strNumber === strrev($strNumber);
}
