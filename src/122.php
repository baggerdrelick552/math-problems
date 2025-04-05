<?php
// Define variables
$variables = array();
// Initialize $variable to null
$variable = "";

// If there are any variables in the current scope, store them in the array
if (is_array($variables)) {
    return "You have defined multiple variables. Please define them individually.";
}

// Default variable is not set yet
$defaultVariable = "default";
// Initialize default variable to null
$defaultValue = "";

// If there are any default values in the current scope, store them in the array
if (is_array($defaultVariable)) {
    return "You have defined a default variable. Please use it.";
}

// Default variable is not set yet
$default = "default";
?>
