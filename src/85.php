<?php
function squareRoot($number) {
    if ($number < 0) {
        throw new Exception("Square root does not exist for negative numbers");
    }
    $square = sqrt($number);
    return $square;
}
