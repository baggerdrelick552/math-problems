<?php
function calculateSquareRoot($value) {
    $sqrtValue = sqrt($value);
    if ($sqrtValue == round($sqrtValue)) {
        return true;
    } else {
        return false;
    }
}
?>
