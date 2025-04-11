<?php
function calculateGCD($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Example usage:
$gcdOfNumbers = calculateGCD(15, 28);
echo "The GCD of 15 and 28 is: " . $gcdOfNumbers; // Output should be 1
