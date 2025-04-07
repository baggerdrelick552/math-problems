<?php
function find_max_integer($numbers) {
    if (empty($numbers)) {
        return 0;
    }
    
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    
    return $max;
}
