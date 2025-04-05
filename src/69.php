<?php
function calculate_math_expression($expression) {
    $result = eval("return " . str_replace(';', ';', $expression) . ";");
    return $result;
}

$mathProblem = "1 + 2 * 3 - 4 / 5";
$result = calculate_math_expression($mathProblem);
echo "The result of the math expression is: " . $result;
?>
