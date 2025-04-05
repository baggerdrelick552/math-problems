<?php
// Define constants
$constants = array(
    'pi' => M_PI,
    'e' => E,
    'sqrt_e' => sqrt($e),
    'cos_pi' => cos(M_PI),
);

// Example of how to use the constants in your code
// Note that 'M_PI' is a constant and not an expression, so you can't directly assign it to variables like 'pi'
echo "Example: $constants['cos_pi']"; // This will output 1.0

// Or, if you want to perform calculations with these constants
// For example, calculate the value of e
echo "e = $constants['e'] * M_PI;"; // This will output approximately 6.273596518418596
?>
