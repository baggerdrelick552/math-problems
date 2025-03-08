<?php
function getRandomNumber($min = 1, $max = 10) {
    return mt_rand($min, $max);
}

function getRandomProblem() {
    // Generate a random problem
    $problem = "";
    $operators = array("+", "-", "*", "/");
    $operator = $operators[array_rand($operators)];
    $num1 = getRandomNumber();
    $num2 = getRandomNumber();
    if ($operator === "+") {
        $problem = "$num1 + $num2";
    } elseif ($operator === "-") {
        $problem = "$num1 - $num2";
    } elseif ($operator === "*") {
        $problem = "$num1 * $num2";
    } elseif ($operator === "/") {
        $problem = "$num1 / $num2";
    }
    return $problem;
}

function checkAnswer($answer) {
    // Check the answer to the problem
    $correct = false;
    if (is_numeric($answer)) {
        $correct = ($answer === eval(getRandomProblem()));
    }
    return $correct;
}
?>