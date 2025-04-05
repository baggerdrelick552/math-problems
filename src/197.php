<?php
// This PHP script is designed to solve various mathematical problems based on your school's curriculum.
// You can use this script as a reference and adjust it according to your specific needs.
// Here are some example questions you can try:

// Example 1: Find the square root of 256

function findSquareRoot($number)
{
    $root = sqrt($number);
    return $root;
}

$squareRootResult = findSquareRoot(256);
echo "The square root of 256 is: " . $squareRootResult;

// Example 2: Calculate the average of a list of numbers

function calculateAverageOfNumbers($numbers)
{
    if (count($numbers) > 0) {
        return array_sum($numbers) / count($numbers);
    }
    return 0;
}

$numbers = [1, 2, 3, 4, 5];
averageResult = calculateAverageOfNumbers($numbers);
echo "The average of the numbers is: " . $averageResult;

// Example 3: Find the largest number in a list

function findLargestNumber($numbers)
{
    if (count($numbers) > 0) {
        return max($numbers);
    }
    return 0;
}

$largestNumber = findLargestNumber([1, 2, 3, 4, 5]);
echo "The largest number in the list is: " . $largestNumber;

// Example 4: Check if a given number is divisible by both 2 and 3

function isDivisibleByBothNumbers($number)
{
    return ($number % 2 == 0) && ($number % 3 == 0);
}

$result = isDivisibleByBothNumbers(18);
echo "Is 18 divisible by both 2 and 3? " . $result;

// Example 5: Reverse a string

function reverseString($input)
{
    return strrev($input);
}

$input = "Hello, World!";
reversedInput = reverseString($input);
echo "The reversed input is: " . $reversedInput;
