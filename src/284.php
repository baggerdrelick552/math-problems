<?php
$student_name = "John Doe"; // Replace with student name

// Code related to math-problems from the student's school's curriculum
function solve_math_problems() {
    // Example: Add two numbers
    $result = $num1 + $num2;
    echo "The sum of $num1 and $num2 is $result";

    // Example: Find square root of a number
    $number = 9;
    $sqrt_result = sqrt($number);
    echo "The square root of $number is $sqrt_result";
}

solve_math_problems(); // Call the function to solve math problems

// Additional math-problems from the student's school's curriculum
function calculate_area() {
    $base = 5; // Replace with base length
    $height = 3; // Replace with height of rectangle
    $area = $base * $height;
    echo "The area of the rectangle is $area";
}

calculate_area(); // Call another function to solve additional math-problems

// More code related to math-problems from the student's school's curriculum
function find_gcd() {
    $num1 = 24;
    $num2 = 30;
    $gcd_result = gcd($num1, $num2);
    echo "The greatest common divisor of $num1 and $num2 is $gcd_result";
}

find_gcd(); // Call the function to find GCD
