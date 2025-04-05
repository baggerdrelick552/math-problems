<?php
// Example PHP code snippet related to mathematical concepts

function calculateArea($dimensions) {
    $area = 0;
    foreach ($dimensions as $dimension) {
        $area += $dimension * $dimension;
    }
    return $area;
}

function findGreatestCommonDivisor($numbers) {
    $gcdValue = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] > $gcdValue) {
            $gcdValue = $numbers[$i];
        }
    }
    return $gcdValue;
}

function isEvenNumber($number) {
    return $number % 2 == 0 ? true : false;
}
?>
