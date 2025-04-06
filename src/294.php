<?php
// Define variables
$studentName = 'John Doe';
$subject = 'Math';

// Calculate and display the grade based on the subject score
if ($subject === 'Math') {
    $grade = 85;
} else {
    $grade = 90;
}

// Display the student name and grade
echo "Hello, $studentName! Your Math score is: $grade.";
?>
