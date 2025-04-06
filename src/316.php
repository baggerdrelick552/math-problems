<?php
function solveMathProblems($input) {
    // Example solution 1: A + B = C
    $solution = "C = A + B";

    // Example solution 2: If x + y equals z, then x - y = z - x or (x - z)/y = 1"
    if ($input['a'] + $input['b'] == $input['c']) {
        return "The solution is that {$input['a']} and {$input['b']} are equal to {$input['c']}";
    } else {
        return "An error occurred. Please check the input data.";
    }
}
