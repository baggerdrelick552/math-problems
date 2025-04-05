<?php
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function sumOfSquares($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += pow($number, 2);
    }
    return $sum;
}
?>
