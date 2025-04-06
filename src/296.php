<?php
function solution1($input) {
    $output = str_replace('math', 'python', $input);
    return $output;
}

function solution2() {
    $values = array(1, 2, 3, 4, 5);
    foreach ($values as $value) {
        echo "Value: $value\n";
    }
}
