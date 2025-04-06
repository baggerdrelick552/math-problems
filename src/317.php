<?php
function calculate_factorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * calculate_factorial($number - 1);
    }
}

// Example usage:
$number = 5;
$result = calculate_factorial($number);
echo "The factorial of {$number} is: {$result}";
