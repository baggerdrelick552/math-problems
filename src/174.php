<?php
// Example PHP code to calculate area of rectangle

function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}

$length = 10; // example length
$width = 5; // example width
$result = calculateArea($length, $width);
echo "The area of the rectangle is: " . $result;
?>
