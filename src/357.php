<?php
$students = [
    "A" => ["Alice", "Bob", "Charlie"],
    "B" => ["Dave", "Eva"],
    "C" => ["Frank", "George", "Henry"]
];

function getRandomStudent() {
    $studentIndex = rand(0, count($students) - 1);
    return $students[$studentIndex];
}

echo "The random student is: " . getRandomStudent();
