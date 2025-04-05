function calculateSum($numbers) {
    $total = 0;
    foreach ($numbers as $number) {
        if (!is_numeric($number)) {
            throw new InvalidArgumentException("Invalid input: all elements must be numbers.");
        }
        $total += $number;
    }
    return $total;
}
