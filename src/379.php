<?php
$subject = "Math Problems";
$questions = [
    "1. Which of these numbers is prime: 25, 37, or 41?",
    "2. What is the sum of the first 10 even numbers?"
];
$result = array_sum(range(1, 10)); // Sum of the first 10 even numbers
echo $subject . "\n";
foreach ($questions as $question) {
    echo "<br>" . $question;
}
echo "The result is: " . $result;
?>
