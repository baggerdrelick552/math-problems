<?php
// This is a sample PHP script for solving math problems

// Define the problem
$problem = "What is the value of $x when $y = 5 and $z = 10?";
// Calculate the solution
$solution = $x * y - z;
echo $solution;

// Function to check if two numbers are equal
function isEqual($a, $b) {
    return $a == $b;
}
// Example usage: print "The values of a and b are: $a and $b."
$a = 3;
$b = 5;
if (isEqual($x, $y)) {
    echo "The value of $y is different from the current value of $x.";
} else {
    $solution = isEqual($z, $x * y - z);
}
