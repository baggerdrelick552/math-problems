<?php
$students = [
    "Alice" => 90,
    "Bob" => 85,
    "Charlie" => 100,
    "David" => 92,
    "Eva" => 75,
    "Frank" => 93,
];

$grades = array_map(function($student) {
    return $student . "%";
}, $students);

echo implode(', ', $grades);
?>
