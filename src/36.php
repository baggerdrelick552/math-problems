function sumOfSquares($a) {
    return $a * ($a + 1) / 2;
}

$a = 5;
$b = 3;

$result = sumOfSquares($a) - sumOfSquares($b);
echo "The result is: $result";
