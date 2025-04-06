<?php
// Sample PHP code for solving mathematical problems related to geometry and algebra

// Calculate the area of a rectangle
$rectangle_area = 5 * 3;
echo "The area of the rectangle is: $rectangle_area";

// Solve a quadratic equation
function solveQuadratic($coefficients) {
    list($a, $b, $c) = $coefficients;
    $discriminant = sqrt($b**2 - 4*$a*($c/$b));
    
    if ($discriminant >= 0) {
        $root1 = (-$b + $discriminant) / (2 * $a);
        $root2 = (-$b - $discriminant) / (2 * $a);

        echo "The roots of the equation are: $root1 and $root2";
    } else {
        echo "There are no real roots for this quadratic equation.";
    }
}

// Example usage
$squareRoot = sqrt(25);
echo "The square root of 25 is: " . $squareRoot;
solveQuadratic(array("a" => 1, "b" => -4, "c" => 9)); // Solve for a quadratic equation

// Example solution: solve for a linear equation
function solveLinearEquation($coefficients) {
    list($a, $b, $c) = $coefficients;
    
    if ($a == 0 && $b == 1) { // If coefficient of x is zero and b is the y-intercept
        echo "The equation is a linear function with an infinite number of solutions: x = -b / a";
    } else {
        echo "There are real roots for this linear equation. The roots are: $a and $b / ($a + c). ";
    }
}
