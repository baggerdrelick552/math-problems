<?php
// Problem: Calculate the sum of an arithmetic sequence
$a = 5; // First term
$d = 2; // Common difference
$n = 8; // Number of terms

$s = $n * ($a + ($a - (n - 1) * d)) / 2;

echo "The sum of the arithmetic sequence is: $s";
?>
