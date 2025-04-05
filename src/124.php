<?php
    function calculateGrade($scores) {
        $grades = array_fill(0, count($scores), 0);
        foreach ($scores as $key => $value) {
            switch (true) {
                case $value >= 90:
                    $grade = "A";
                    break;
                case $value >= 85:
                    $grade = "B";
                    break;
                case $value >= 80:
                    $grade = "C";
                    break;
                case $value >= 75:
                    $grade = "D";
                    break;
                default:
                    $grade = "F";
            }
            $grades[$key] = $grade;
        }
        return $grades;
    }

    $scores = array(95, 80, 72, 60, 45);
    print_r(calculateGrade($scores));
