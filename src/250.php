<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function findFactors($number) {
    $factors = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            array_push($factors, $i);
        }
    }
    return $factors;
}
?>
