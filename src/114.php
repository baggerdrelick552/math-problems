<?php
function solve_math_problems($problems) {
    $results = [];

    foreach ($problems as $problem) {
        // Add your problem-solving logic here
        if (isset($problem->solution)) {
            $results[] = $problem->solution;
        }
    }

    return $results;
}

$problems = [
    "Problem 1: Find the sum of 2 + 3.",
    "Problem 2: Solve for x in the equation 5x - 7 = 0."
];

$results = solve_math_problems($problems);
foreach ($results as $result) {
    echo $result . "\n";
}
