<?php
function addNumbers($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        throw new Exception("Both arguments must be numbers.");
    }
    return $a + $b;
}

try {
    echo "Sum of {$a} and {$b}: " . addNumbers($a, $b);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
