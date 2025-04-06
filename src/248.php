<?php
function calculateSum($numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    return $total;
}

$studentScores = [85.5, 92.3, 78.4, 86.1];
$result = calculateSum($studentScores);
echo "The sum of the scores is: " . $result;
?>
