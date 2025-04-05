<?php
// Example PHP script for solving mathematical problems similar to those found in "Math-Problems"
// This is just an example and not intended for actual use. Use responsibly.

function calculate($expression) {
    // Convert string expression into valid PHP syntax
    $expression = str_replace(' ', '\n', trim($expression));
    $parts = explode('\n', $expression);
    
    if (count($parts) > 1 && is_numeric($parts[0]) && is_numeric($parts[count($parts) - 1])) {
        // Assume the expression is a mathematical equation
        $result = eval("return " . $parts[0] . " + " . $parts[count($parts) - 1]);
    } else {
        // Handle non-mathematical expressions (e.g., strings)
        switch ($expression) {
            case 'a + b':
                return $a + $b;
            case 'c * d / e':
                return $c * $d / $e;
            default:
                return "Invalid expression: $expression";
        }
    }
}

// Example usage
echo calculate("3 + 4 - 2");
