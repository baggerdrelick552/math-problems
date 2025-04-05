<?php
function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

$exampleNumbers = [1, 2, 3, 4];
$result = calculateSum($exampleNumbers);
echo "The sum of the numbers is: " . $result;
?>
