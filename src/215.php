<?php
// Example PHP code for solving a math problem based on your school's curriculum

function solveMathProblem($problem) {
    $parts = explode(' ', $problem);
    
    if (count($parts) < 4 || count($parts) > 6) {
        return "Invalid problem format.";
    }
    
    $studentName = $parts[0];
    $subject = $parts[1];
    $question = $parts[2];
    $answer = $parts[3];
    
    switch ($subject) {
        case 'Algebra':
            if ($question == 'x + 5y = 10') {
                return "The solution is: $studentName solved algebra correctly, with an answer of $answer.";
            }
            break;
        case 'Geometry':
            if ($question == 'What is the area of a rectangle?'):
                return "Area calculation formula for rectangle: length * width. Solution: $studentName correctly solved geometry problem and got $answer.";
            }
    }
    
    return "Unknown subject or question format.";
}
