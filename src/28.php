<?php
function solveMathProblems($questions) {
    $results = [];
    foreach ($questions as $question) {
        $answer = doCalculation($question);
        $result = calculateResult($answer);
        $results[] = "$question: $result";
    }
    return implode("\n", $results);
}

function doCalculation($question) {
    // Implement your calculation logic here
    return 0;
}

function calculateResult($answer) {
    if ($answer == 5 || $answer == 8) {
        return "Correct! The answer is " . $answer;
    } else {
        return "Incorrect, the correct answer should be 5 or 8.";
    }
}
