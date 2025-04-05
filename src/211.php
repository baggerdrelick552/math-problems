<?php
// This PHP code is designed to solve math problems from a school's curriculum.
// You can modify and extend this code according to your specific needs.

function solveMathProblem($problem) {
    // Split the problem into words
    $words = explode(' ', $problem);
    
    // Initialize variables for solving
    $answer = 0;
    $operation = '';
    
    // Process each word in the problem
    foreach ($words as $word) {
        if (in_array($word, ['+', '-', '*', '/'])) {
            if ($operation == '+' && $word == 'add') {
                $answer += intval(trim($words[count($words) - 1]));
                break;
            } elseif ($operation == '-' && $word == 'subtract') {
                $answer -= intval(trim($words[count($words) - 1]));
                break;
            } else if ($operation == '*' && $word == 'multiply') {
                $answer *= intval(trim($words[count($words) - 1]));
                break;
            } else if ($operation == '/' && $word == 'divide') {
                $answer /= intval(trim($words[count($words) - 1]));
                break;
            }
        } else {
            // If the word is a number, add it to the answer
            $answer += (int)$word;
        }
    }
    
    return "Answer: $answer";
}

// Example usage:
$problem = 'If x + y = 5 and x - y = 2, what is the value of x and y?';
echo solveMathProblem($problem);
