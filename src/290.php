<?php
// Example PHP code related to math-problems

$sum = 0;
for ($i = 1; $i <= 5; $i++) {
    if ($i % 2 == 0) {
        $sum += $i * 2;
    } else {
        $sum += $i;
    }
}
echo "The sum is: " . $sum;
?>
