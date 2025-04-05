<?php
// This is a simple PHP script to solve math problems related to geometry and algebra.
// Feel free to modify it according to your specific needs or add more features.

// Example: Solve for x in 2x + 3 = 7
$x = (7 - 3) / 2;
echo "The solution to the equation is: $x";

// Example: Solve for y in 5y - 6 = 10
$y = (10 + 6) / 5;
echo "The solution to the equation is: $y";

// Example: Calculate and display the area of a rectangle with length 8 cm and width 3 cm
$area = 8 * 3;
echo "The area of the rectangle is: $area square cm";

// Example: Find the roots of the quadratic equation x^2 - 5x + 6 = 0
$factors = [1, 2, 3, 6];
$xRoots = array_merge(array_search(5), array_search(-6), ...$factors);
echo "The roots are: $xRoots";
?>
