<?php
// Define variables and constants
$x = 0;
$solution = "";
function solveEquation($a, $b, $c) {
    // Calculate the discriminant
    $discriminant = sqrt(pow($b, 2) - 4 * ($a * $c));

    if ($discriminant == 0) {
        // If the discriminant is zero, there's one solution
        $solution = -$b / (2 * $a);
    } else {
        // If the discriminant is non-zero, there are two solutions
        $solution1 = (-$b + $discriminant) / (2 * $a);
        $solution2 = (-$b - $discriminant) / (2 * $a);
        $solution = $solution1 < $solution2 ? $solution1 : $solution2;
    }
}

// Example values for a, b, and c
$a = 1; 
$b = -3;
$c = 2;

solveEquation($a, $b, $c);
?>
