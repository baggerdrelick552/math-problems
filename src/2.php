<?php
$mathProblems = array(
"1 + 2 =",
"3 x 4 =",
"5 - 6 =",
"7 / 8 =");
$mathSolutions = array(
"3",
"12",
"-1",
"0.875");
$randomMathProblem = $mathProblems[array_rand($mathProblems)];
echo "$randomMathProblem";
?>