<?php
// Example PHP code snippet related to math-problems

function calculateGCD($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}

function sumNumbers($numbers) {
    if (empty($numbers)) return 0;

    $sum = array_sum($numbers);
    return $sum;
}

function reverseString($str) {
    return strrev($str);
}
?>
