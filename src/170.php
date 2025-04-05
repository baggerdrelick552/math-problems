<?php
// This is a sample PHP code for generating random numbers.
function getRandomNumber() {
    // Generate a random integer between 0 and 999 (inclusive)
    return rand(0, 999);
}

// Example usage:
$randomNumber = getRandomNumber();
echo "Random number: $randomNumber";
?>
