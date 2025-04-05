<?php 
// Example PHP code to solve an algebraic equation

function solveEquation($expression) {
    $parts = explode('=', $expression);
    if (count($parts) !== 2) {
        throw new Exception("The expression should be in the form of 'result = expression'");
    }
    
    $leftPart = $parts[0];
    $rightPart = $parts[1];
    
    // Perform arithmetic operations
    $leftValue = eval('(' . $leftPart . ')');
    $rightValue = eval('($rightPart * 2) - $leftValue');
    
    return $rightValue;
}
