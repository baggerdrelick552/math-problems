<?php
function calculateArea($rectangle) {
    $length = $rectangle['length'];
    $width = $rectangle['width'];
    return $length * $width;
}

$area = calculateArea([10, 5]);
echo "The area of the rectangle is: " . $area;
