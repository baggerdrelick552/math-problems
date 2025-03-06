<?php
// Random math problem generator
function generateMathProblem() {
    $numbers = range(1, 20);
    shuffle($numbers);
    $a = array_pop($numbers);
    $b = array_pop($numbers);
    $operator = ['+', '-', '*', '/'][rand(0,3)];
    return "$a $operator $b =";
}
?>