<?php
// This is an example PHP script for solving mathematical problems from Math Problems.
// The script will use basic arithmetic operations and algebraic expressions to solve problems.

// Define variables
$firstNum = 10;
$secondNum = 5;
$result = $firstNum + $secondNum;
echo "The sum of the two numbers is: " . $result;

// Solve a quadratic equation using the quadratic formula
$a = 1; // coefficient of x^2
$b = -9; // coefficient of x
$c = 40; // constant term

// Calculate the discriminant
$discriminant = sqrt($b * $b - 4 * $a * $c);

// Calculate the solutions using the quadratic formula
$solution1 = (-$b + $discriminant) / (2 * $a);
$solution2 = (-$b - $discriminant) / (2 * $a);

echo "The solution to the equation is: $solution1 and $solution2.";
?>
