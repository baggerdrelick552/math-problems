<?php
function calculateAverage($numbers) {
    if (!is_array($numbers) || !count($numbers)) {
        throw new Exception("Invalid input: $numbers is not an array or contains non-numeric values.");
    }

    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum / count($numbers);
}
