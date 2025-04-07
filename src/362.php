<?php
function calculateSquare($side) {
    $area = $side * $side;
    return $area;
}

$sideLength = 5;
$squareArea = calculateSquare($sideLength);
echo "The area of a square with side length $sideLength is: $squareArea";
?>
