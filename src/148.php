<?php
// Define some variables
$name = "Alice";
$age = 20;
$scores = [85, 90, 78];

// Check if the scores are above average
if ($average_score = calculate_average(scores)) {
    echo "The average score is: $average_score\n";
} else {
    echo "Not all students performed well.\n";
}

function calculate_average($scores) {
    return array_sum($scores) / count($scores);
}
?>
