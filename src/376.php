<?php
// This PHP script is designed to solve mathematical problems based on various topics found in my "math-problems" (Solutions to math problems from your school's curriculum) project.
// The script contains functions to calculate area, circumference of a circle, and square root of a number.

function areaRectangle($length, $width) {
    return $length * $width;
}

function perimeterRectangle($length, $width) {
    return 2 * ($length + $width);
}

function circleArea() {
    return M_PI * pow(10.0, -2); // Example area calculation
}

function squareRoot($number) {
    return sqrt($number);
}
?>
