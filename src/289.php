<?php
// Problem 1: Sum of digits of an integer
function sum_of_digits($num) {
    $sum = 0;
    while ($num > 0) {
        $sum += (int)strval($num % 10);
        $num /= 10;
    }
    return $sum;
}

// Problem 2: Prime number checker
function is_prime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}

// Problem 3: Factorial of a number
function factorial($num) {
    if ($num < 0) {
        echo "Factorial is not defined for negative numbers.";
    } else {
        $factorial = 1;
        while ($num > 0) {
            $factorial *= $num--;
        }
        return $factorial;
    }
}

// Problem 4: Check if a string contains only vowels
function has_only_vowels($str) {
    $vowels = "aeiouAEIOU";
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            return false;
        }
    }
    return true;
}

// Problem 5: Check if a number is divisible by another
function is_divisible($num1, $num2) {
    return ($num1 % $num2 == 0);
}
?>
