<?php
// Define constants for the problem
$problem = "Mathematics Problem";
$solution1 = "Solution 1";

// Check if solution exists and display it
if (isset($solution1)) {
    echo $solution1;
} else {
    echo "No solution found.";
}

// Generate random numbers between 0-5
$randomNum1 = rand(0, 5);
$randomNum2 = rand(0, 5);

// Compare the two random numbers and display the result
if ($randomNum1 < $randomNum2) {
    echo "The first number is less than the second number.";
} else if ($randomNum1 > $randomNum2) {
    echo "The first number is greater than the second number.";
} else {
    echo "The two numbers are equal.";
}

// Generate random words
$word1 = "hello";
$word2 = "world";

// Concatenate and display the two random words
echo $word1 . ' ' . $word2;
?>
