<?php
function calculateAverage($numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total / count($numbers);
}

$numbers = [1, 2, 3, 4, 5];
$result = calculateAverage($numbers);
echo "The average is: " . $result;
?>
