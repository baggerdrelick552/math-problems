<?php
function calculateArea($side1, $side2, $side3) {
    return sqrt($side1 * $side2 + $side3 * $side3 - 0.5 * ($side1 * $side2));
}

// Example usage:
$sides = [3, 4, 5];
$area = calculateArea($sides[0], $sides[1], $sides[2]);
echo "The area of the triangle with sides {$sides[0]}, {$sides[1]} and {$sides[2]} is: " . $area;
?>
