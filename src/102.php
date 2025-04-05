<?php
$questions = [
    "What is the area of a circle with radius 5?",
    "The perimeter of a rectangle is 30 cm. What are its length and width if both dimensions are integers?",
    "Calculate the volume of a cube with side length 4 cm."
];
$answers = [
    78.53981633974483,
    [20, 14],
    64
];

for ($i = 0; $i < count($questions); $i++) {
    echo $questions[$i] . " - " . $answers[$i] . "\n";
}
