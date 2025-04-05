function squareRoot(int $num) {
    if ($num < 0) {
        throw new Exception("Cannot compute square root of a negative number.");
    }
    return sqrt($num);
}
