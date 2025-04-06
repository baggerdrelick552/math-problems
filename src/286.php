<?php
function calculateArea($radius) {
    $area = M_PI * pow($radius, 2);
    return $area;
}

$radius = 5; // Example radius value
$area = calculateArea($radius);
echo "The area of the circle with radius {$radius} is: {$area}";
