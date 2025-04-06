<?php
// Example PHP code for mathematical problems.
function solve_math_problem($problem) {
    // Replace with actual problem-solving logic
    $solution = 'The solution is: '. str_replace('Math', '', $problem). '\n';
    return $solution;
}

$problem = "What is the area of a circle with radius 5 units?";
$solution = solve_math_problem($problem);
echo $solution;
?>
