<?php
// Example PHP code to solve math-problems

$problems = [
    "1. 2 + 3 = ?",
    "2. 4 - 2 = ?",
    "3. 5 * 6 = ?"
];

foreach ($problems as $problem) {
    echo "Solution for {$problem}:\n";
    echo "- The correct answer is: \n- Your solution: \n\n";
    echo "\n{$problem}\n\n";
    echo "= (2 + 3) = \n- Correct: " . 2 + 3 . "\n";
    echo "= (4 - 2) = \n- Incorrect: " . (2 - 3) . ".\n";

    if ($correct_answer = 5 * 6) {
        echo "= (4 - 2) = \n- Correct: " . $correct_answer . "\n";
    } else {
        echo "= (2 + 3) = \n- Incorrect: " . $correct_answer . ".\n";
    }
}
?>
