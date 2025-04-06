<?php
function calculateAverage(array $numbers) {
    if (empty($numbers)) {
        return 0;
    }
    
    $sum = array_sum($numbers);
    $count = count($numbers);
    
    return ($sum / $count);
}

$numbers = [4, 5, 6, 7, 8];
echo "Average of the numbers: " . calculateAverage($numbers) . "\n";
?>
