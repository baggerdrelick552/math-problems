<?php
// Define variables
$grade = 85; // Set grade as 85

// Conditionally print message based on student's grade
if ($grade >= 90) {
    echo "Congratulations! You have reached an excellent grade.";
} elseif ($grade >= 75) {
    echo "Your current grade is satisfactory. Keep up the good work!";
} else {
    echo "You are performing poorly. Please review your assignments and study hard.";
}
?>
