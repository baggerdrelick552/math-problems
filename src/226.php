<?php
// Define variables and constants
$var1 = "value1";
const var2 = "value2";

// Check if variable is defined
if (isset($var1)) {
    // Code to execute when $var1 is set
    echo "$var1 is defined.";
} else {
    // Code to display a message if $var1 is not defined
    echo "Variable $var1 is not defined.";
}

// Example output with isset() check
if (isset($var2)) {
    echo "Variable $var2 is also defined.";
} else {
    echo "Variable $var2 is not defined, using default value.";
}
?>
