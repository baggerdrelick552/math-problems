<?php
// This PHP code is designed to solve some mathematical problems related to geometry and algebra.
// It will prompt the user with a series of questions about geometric shapes and their properties.

function calculateArea($sideLength) {
    $area = 0;
    switch ($sideLength) {
        case 'square':
            $area = $sideLength * $sideLength;
            break;
        case 'rectangle':
            $width = (int)$input('width');
            $height = (int)$input('height');
            $area = $width * $height;
            break;
    }
    echo "The area of the shape is: " . $area;
}

function calculatePerimeter($sideLength) {
    $perimeter = 0;
    switch ($sideLength) {
        case 'square':
            $perimeter = 4 * $sideLength;
            break;
        case 'rectangle':
            $width = (int)$input('width');
            $height = (int)$input('height');
            $perimeter = 2 * ($sideLength + $width);
            break;
    }
    echo "The perimeter of the shape is: " . $perimeter;
}

function findRoot($value) {
    if (!is_numeric($value)) {
        throw new Exception("Invalid value");
    }

    $start = 0;
    $end = 100000;
    while ($start < $end) {
        $middle = (int)((double)$start + $end) / 2;
        if ($middle * $middle == $value) {
            return $middle;
        } elseif ($value > $middle * $middle) {
            $start = $middle + 1;
        } else {
            $end = $middle - 1;
        }
    }

    throw new Exception("No root found");
}

function calculateHypotenuse($sideA, $sideB) {
    if (!is_numeric($sideA) || !is_numeric($sideB)) {
        throw new Exception("Invalid side lengths");
    }

    $hypotenuse = sqrt(pow($sideA, 2) + pow($sideB, 2));
    echo "The hypotenuse is: " . $hypotenuse;
}

function findMedian(values) {
    if (empty($values)) {
        throw new Exception("No values provided");
    }

    sort($values);
    $size = count($values);

    if ($size % 2 == 1) {
        return $values[$size / 2];
    } else {
        return ($values[$size / 2 - 1] + $values[$size / 2]) / 2;
    }
}
?>
