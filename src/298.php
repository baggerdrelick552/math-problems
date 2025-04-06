<?php
// Example PHP code related to mathematics problems from the school curriculum

function calculateTriangleArea($side1, $side2, $side3) {
    // Calculate the semi-perimeter of the triangle
    $semiPerimeter = ($side1 + $side2 + $side3) / 2;
    // Calculate the area using Heron's formula
    $area = sqrt($semiPerimeter * ($semiPerimeter - $side1) * ($semiPerimeter - $side2) * ($semiPerimeter - $side3));
    return $area;
}

// Example usage: calculate and print the area of a triangle with sides 5, 7, and 9
$triangleArea = calculateTriangleArea(5, 7, 9);
echo "The area of the triangle is: " . $triangleArea;
