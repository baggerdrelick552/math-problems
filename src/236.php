<?php
// Define a simple PHP class to solve mathematical problems

class MathSolver {
    private $results = [];

    public function add($num1, $num2) {
        $result = $num1 + $num2;
        $this->results[] = "$num1 + $num2 = $result";
        return $result;
    }

    public function subtract($num1, $num2) {
        $result = $num1 - $num2;
        $this->results[] = "$num1 - $num2 = $result";
        return $result;
    }

    public function multiply($num1, $num2) {
        $result = $num1 * $num2;
        $this->results[] = "$num1 * $num2 = $result";
        return $result;
    }

    public function divide($num1, $num2) {
        if ($num2 != 0) {
            $result = $num1 / $num2;
            $this->results[] = "$num1 / $num2 = $result";
            return $result;
        } else {
            echo "Division by zero is not allowed.";
            return null;
        }
    }

    public function square($value) {
        $result = $value * $value;
        $this->results[] = "$value squared = $result";
        return $result;
    }

    public function cube($value) {
        $result = $value * $value * $value;
        $this->results[] = "$value cubed = $result";
        return $result;
    }
}

// Example usage
$solver = new MathSolver();

echo "Adding 3 and 5: \n" . $solver->add(3, 5) . "\n";

echo "Subtracting 2 from 8: \n" . $solver->subtract(8, 2) . "\n";
