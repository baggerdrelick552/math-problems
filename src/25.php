<?php
// Math problems solution PHP file example

function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        throw new Exception("Division by zero is not allowed.");
    }
}

function square($number) {
    return $number ** 2;
}

function squareRoot($number) {
    return sqrt($number);
}
