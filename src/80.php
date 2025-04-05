<?php
// Example PHP code for solving mathematical problems
echo "Problem: The area of a rectangle is given by the formula A = l * w, where 'l' is the length and 'w' is the width.";
echo "Example: The area of a rectangle with length 5 meters and width 3 meters is calculated as A = 5 * 3 = 15 square meters.";

// Example PHP code for solving quadratic equations
function solveQuadraticEquation($a, $b, $c) {
    $discriminant = sqrt(pow($b, 2) - (4 * $a * $c));
    
    if ($discriminant > 0) {
        $root1 = (-$b + $discriminant) / (2 * $a);
        $root2 = (-$b - $discriminant) / (2 * $a);
        
        echo "Roots of the quadratic equation are: x1 = {$root1}, x2 = {$root2}";
    } else if ($discriminant == 0) {
        $root = -$b / (2 * $a);
        echo "Root is: x = {$root}";
    }
}

// Example PHP code for solving linear equations
function solveLinearEquation($coefficients) {
    $sumOfCoefficients = array_sum($coefficients);

    if ($sumOfCoefficients == 0) {
        echo "There are infinitely many solutions.";
    } else {
        $roots = [];
        
        foreach ($coefficients as $part) {
            $roots[] = -$part / $sumOfCoefficients;
        }
        
        echo "Solutions are: ";
        print_r($roots);
    }
}

// Example PHP code for creating a new array
function createNewArray() {
    // This function creates an empty array and returns it.
    
    return [];
}

// Example PHP code for generating random numbers between 1 and 100 (inclusive)
function generateRandomNumber() {
    $min = 1;
    $max = 100;
    
    return rand($min, $max);
}
