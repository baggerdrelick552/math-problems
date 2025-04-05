<?php
// Example PHP code snippet for solving a math problem related to geometry

function calculatePerimeter($side1, $side2) {
    // Calculate perimeter of two sides given their lengths
    return $side1 + $side2;
}

// Test the function with some example values
$lengthA = 5; // Side A
$lengthB = 3; // Side B

$perimeter = calculatePerimeter($lengthA, $lengthB);
echo "The perimeter of sides $lengthA and $lengthB is: $perimeter";
?>
