<?php
    function customMath($a, $b, $operation = 'add') {
        switch ($operation) {
            case 'add':
                return $a + $b;
            case 'subtract':
                return $a - $b;
            case 'multiply':
                return $a * $b;
            default:
                throw new Exception("Unsupported operation");
        }
    }

// Example usage
$a = 5; $b = 3; // Example numbers
$result = customMath($a, $b, 'add');
echo "Result: $result"; // Output: Result: 8
