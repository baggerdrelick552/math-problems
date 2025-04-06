function calculateSum($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

function findMedian(numbers) {
    sort($numbers);
    $n = count($numbers);
    if (floor($n / 2) == $n) {
        return $numbers[$n / 2];
    } else {
        return ($n % 2 === 0) ? ($numbers[ceil($n / 2 - 1)] + $numbers[ceil($n / 2)]) / 2 : $numbers[(ceil($n / 2)) - 1];
    }
}

function sortArray($array) {
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}

function findMax(arr) {
    $max = 0;
    foreach ($arr as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }
    return $max;
}
