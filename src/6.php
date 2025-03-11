<?php
// Random math problem
$num1 = rand(1, 10);
$num2 = rand(1, 10);
$operator = rand(1, 2) == 1 ? '+' : '-';
$problem = "$num1 $operator $num2";
echo "What is $problem?";
// Solution
if ($operator === '+') {
    $answer = $num1 + $num2;
} else {
    $answer = $num1 - $num2;
}
echo "\nYour answer: ";
$user_input = readline();
echo "\nCorrect answer: $answer";
if ($user_input === "$answer") {
    echo "You are correct!";
} else {
    echo "Sorry, that is incorrect. Please try again.";
}
?>