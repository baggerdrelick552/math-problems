<?php
function addDigits($number) {
    while ($number > 0) {
        $sum = 0;
        while ($number > 0) {
            $sum += $number % 10;
            $number /= 10;
        }
        $number = intdiv($sum, 10);
    }
    return $number;
}

echo addDigits(12345); // Output: 6
?>
