<?php
function solveMathProblem($problem) {
    $solution = solveProblem($problem);
    echo "The solution is: $solution\n";
}

function solveProblem($problem) {
    // Example solving logic based on the problem statement
    if ($problem == 'example') {
        return 10;
    } else {
        return 20;
    }
}
