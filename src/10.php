  <?php
$problem_number = rand(1,10); // Replace with the number of math problems in your school's curriculum
$solution = $problem_number % 2 == 0 ? "The solution is even" : "The solution is odd";
echo($solution);
?>