<?php
// This is an example PHP file containing solutions for mathematical problems.
// Please modify and use it only for educational purposes and not for any illegal activities.

function area_of_circle($radius) {
    return M_PI * pow($radius, 2);
}

function calculate_expression($expression) {
    $parsed = explode(' ', $expression);
    if (count($parsed) > 1 && is_numeric($parsed[0]) && is_numeric($parsed[1])) {
        return $parsed[0] + ' / ' + $parsed[1];
    }
    return "Invalid expression format.";
}

// Example usage:
$circle_area = area_of_circle(7);
echo "The area of the circle with radius 7 units is: " . $circle_area;

expression_result = calculate_expression("2 * x + 3");
echo "Expression result: " . $expression_result;
?>
