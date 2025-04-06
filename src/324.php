<?php
function solveMathProblem($problem) {
    $solution = solveSimpleEquation($problem);
    echo "Solution: \n";
    print_r($solution);
}
