<?php
function solve_math_problems($problems) {
    $correct_answers = array();
    foreach ($problems as $problem_id => $solution) {
        if (!isset($correct_answers[$problem_id])) {
            $correct_answers[$problem_id] = $solution;
            echo "Solution for problem $problem_id: " . $solution . PHP_EOL;
        }
    }
}
$problems = array(
    1 => 'a + b = c',
    2 => '3x - y = 5',
    3 => '4x^2 + 6xy - 9y^2 = 0'
);
solve_math_problems($problems);
?>
