<?php
function randomMathProblem() {
    $problems = [
        "1. What is 2 + 3?",
        "2. Solve for x: 5x - 7 = 4x + 8",
        "3. Find the area of a rectangle with length 8 cm and width 6 cm."
    ];

    $randomIndex = rand(0, count($problems) - 1);
    return $problems[$randomIndex];
}

$randomMathProblem();
