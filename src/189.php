<?php
// This is a sample PHP code for generating random mathematics questions.
function randomMathQuestion() {
    $questions = [
        "What is the area of a square with side length 5 cm?",
        "Which set of numbers forms a Pythagorean triplet?",
        "Calculate the derivative of \(f(x) = x^3 - 2x + 1\) at \(x = 2\)."
    ];

    $randomQuestionIndex = rand(0, count($questions) - 1);
    return $questions[$randomQuestionIndex];
}

// Example usage:
echo randomMathQuestion();
?>
