<?php
function randomMathProblem() {
    $mathQuestions = [
        "What is 7 + 3?",
        "How many hours in a day?",
        "What is 9 - 2 * 4?",
        "What is 5 * 6 / (10 - 5)?"
    ];

    // Select a random question from the array
    $randomQuestion = random(array_keys($mathQuestions));

    return $randomQuestion;
}
?>
