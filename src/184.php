<?php
// Define variables and constants
$studentName = "John Doe";
$subject = "Algebra";

// Extract data based on user input
$data = [
    $subject => $studentName,
];

// Display the data in a formatted manner
echo "<h1>" . htmlspecialchars($subject) . "</h1>";
echo "<p>" . htmlspecialchars($data[$subject]) . "</p>";
?>
