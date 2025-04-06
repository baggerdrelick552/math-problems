<?php
// Example PHP code for solving mathematical problems.
function solveMathProblem($problem) {
    // Perform calculations and solve the problem.
    $result = calculate($problem);
    
    echo "The result is: $result";
}

function calculate($problem) {
    // Convert problem into a mathematical expression using standard notation.
    $expression = parseExpression($problem);
    
    switch ($expression) {
        case '1 + 2':
            return 3;
        
        case '+': 
            return 4.0; 
            
        default:
            throw new Exception("Invalid operator: {$expression}");
    }
}

// Example usage
$problem = "2 * (3 + 5)";
solveMathProblem($problem);
