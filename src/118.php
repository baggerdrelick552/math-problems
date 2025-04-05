<?php
function calculate_sum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        if (!is_numeric($number)) {
            throw new Exception("All elements must be numbers.");
        }
        $sum += $number;
    }
    return $sum;
}

$numbers = [1, 2, "hello", 4.5];
try {
    echo calculate_sum($numbers);
} catch (Exception $e) {
    echo $e->getMessage();
}
