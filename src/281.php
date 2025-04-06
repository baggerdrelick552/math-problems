<?php
    function calculateGCD($a, $b) {
        while ($b != 0) {
            $temp = $a % $b;
            $a = $b;
            $b = $temp;
        }
        return $a;
    }

    function findFactors($number) {
        $factors = [];
        for ($i = 1; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                array_push($factors, $i);
                if ($number / $i != $i) {
                    array_push($factors, $number / $i);
                }
            }
        }
        return $factors;
    }

    function isPerfectSquare($number) {
        $sqrt = sqrt($number);
        return $sqrt * $sqrt == $number;
    }
?>
