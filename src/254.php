<?php
// Problem: Write a PHP script that calculates the sum of all odd numbers in an array.
function sumOddNumbers($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        if ($number % 2 !== 0) { // Check if the number is odd
            $sum += $number;
        }
    }
    return $sum;
}

// Example array of numbers
$numbersArray = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Calculate and print the sum of all odd numbers in the array
echo "The sum of all odd numbers in the array is: " . sumOddNumbers($numbersArray);
?>
