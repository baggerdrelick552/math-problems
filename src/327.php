<?php
function calculateTriangleArea($side1, $side2, $side3) {
    // Heron's formula to find the area of a triangle with sides a, b, c
    $semiPerimeter = ($side1 + $side2 + $side3) / 2;
    $area = sqrt($semiPerimeter * ($semiPerimeter - $side1) * (semiPerimeter - $side2) * (semiPerimeter - $side3));
    return $area;
}

// Example usage:
$triangleSide1 = 5; // side1
$triangleSide2 = 6; // side2
$triangleSide3 = 7; // side3

echo "The area of the triangle is: " . calculateTriangleArea($triangleSide1, $triangleSide2, $triangleSide3);
?>
