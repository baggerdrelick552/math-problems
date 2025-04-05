<?php
$student_scores = array(
    "math": 85,
    "language": 92,
    "history": 78,
    "science": 90,
    "english": 88,
    "mathematics": 95,
);

function calculate_average($scores) {
    return array_sum($scores) / count($scores);
}

$average_score = calculate_average($student_scores);
echo "Your average score is: $average_score";
?>
