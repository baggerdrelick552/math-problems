<?php
// Example PHP code for solving a typical high school algebra problem

function solveAlgebraProblem($problem) {
    // Split the problem into multiple statements
    $statements = explode(" ", $problem);
    
    foreach ($statements as $statement) {
        $parts = explode("*", $statement);
        
        if (count($parts) > 1 && isset($parts[0]) && $parts[0] == '*') {
            // Extract the coefficient and variable
            $coefficient = $parts[1];
            $variable = trim(substr($parts[2], 1));
            
            switch ($variable) {
                case 'x':
                    return "The solution is: $coefficient";
                default:
                    return "Invalid variable name.";
            }
        } else if (count($parts) > 1 && isset($parts[0]) && $parts[0] == '+') {
            // Extract the coefficient and sign
            $coefficient = $parts[1];
            
            switch ($variable) {
                case 'x':
                    return "The solution is: " . (-$coefficient);
                default:
                    return "Invalid variable name.";
            }
        } else if (count($parts) > 2 && isset($parts[0]) && $parts[0] == '/') {
            // Extract the dividend and divisor
            $dividend = $parts[1];
            $divisor = $parts[2];
            
            switch ($variable) {
                case 'x':
                    return "The solution is: " . (floatval($dividend) / floatval($divisor));
                default:
                    return "Invalid variable name.";
            }
        } else {
            // Handle the rest of the statements
            echo "Error: Problem $statement not found.";
            exit();
        }
    }

    // If no problem statement is provided, return an error message
    return "An error occurred. Please provide a problem statement.";
}
