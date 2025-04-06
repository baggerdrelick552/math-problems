<?php
function getRandomInt($min, $max) {
    return intval(rand() * (float)(explode(" ", ($max - $min + 1))[0]));
}

echo "The random number is: " . getRandomInt(10, 50);
?>
