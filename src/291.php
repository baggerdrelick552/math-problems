<?php
// Example PHP code to solve a problem related to mathematics

function findFactors($number) {
    $factors = [];
    for ($i = 1; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $factors[$i] = $i;
            $factors[$number / $i] = $number / $i;
        }
    }
    return $factors;
}

function calculateAverage($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    if (count($numbers) > 1 && count($numbers) % 2 == 1) {
        sort($numbers);
        return $sum / count($numbers);
    } else {
        return 0;
    }
}

// Example usage
$fruits = [5, 3, 4];
echo "Factors of 15: " . implode(", ", findFactors(15)) . "\n";
echo "Average of " . implode(", ", $fruits) . ": " . calculateAverage($fruits) . "\n";

