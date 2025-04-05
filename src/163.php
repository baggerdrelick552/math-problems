<?php
function calculate_average(numbers) {
    if (empty($numbers)) {
        return 0;
    }
    
    $sum = array_sum($numbers);
    $count = count($numbers);
    
    return $sum / $count;
}
?>
