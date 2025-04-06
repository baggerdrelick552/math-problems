<?php
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        if (is_numeric($number)) {
            $sum += $number;
        }
    }
    return $sum;
}

$numbers = [1, 2.5, -3, 4];
echo "The sum of the numbers is: " . calculateSum($numbers);
?>
