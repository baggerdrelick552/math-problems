<?php
$problems = [
    "1. What is 5 + 3?",
    "2. Find the square root of 16.",
    "3. Solve the equation: x^2 - 5x + 6 = 0."
];
$randomProblem = $problems[ rand(0, count($problems) - 1)];
echo $randomProblem . "<br>";
?>
