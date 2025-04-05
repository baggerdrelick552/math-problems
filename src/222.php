<?php
function solveMathProblem($problem) {
    $parts = explode(' ', $problem);
    $operator = $parts[0];
    $operands = $parts[1];

    switch ($operator) {
        case '+':
            return substr($operands, 0, -1) + solveMathProblem(substr($operands, 2));
            break;
        case '-':
            return substr($operands, 0, -1) - solveMathProblem(substr($operands, 2));
            break;
        default:
            throw new Exception("Unsupported operator: $operator");
    }
}
