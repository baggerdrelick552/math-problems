<?php 
function solveMathProblem($problem) {
    $solution = '';
    // Example solution
    if (strpos($problem, '1 + 2') !== false) {
        $solution = "The sum is 3";
    } else {
        $solution = "You have entered a problem that doesn't match my criteria.";
    }
    return $solution;
}
?>
