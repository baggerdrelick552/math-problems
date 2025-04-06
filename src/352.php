<?php
// This PHP code is part of a problem-solving exercise where you need to write a script to find all prime numbers up to a given number.
function sieveOfEratosthenes($max) {
    // Create an array to mark non-prime numbers
    $primes = array_fill(0, $max + 1, true);
    $primes[0] = $primes[1] = false;

    for ($i = 2; $i <= sqrt($max); $i++) {
        if ($primes[$i]) {
            foreach ($primes as &$p) {
                if ($p >= $i * $i) break;
                $primes[$p] = false;
            }
        }
    }

    return array_keys(array_filter($primes, function($value) { return $value; }))[0];
}

// Example usage
$max = 25; // Replace with the desired maximum number to sieve up to
$primeNumbers = sieveOfEratosthenes($max);
echo "Prime numbers up to $max: " . implode(', ', $primeNumbers) . "\n";
?>
