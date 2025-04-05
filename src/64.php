<?php
// Define variables and constants
$student_id = 1;
$password = "password";
$surname = "Smith";
$email = "john@example.com";

// Generate unique student ID
$random_id = uniqid();

// Create user record in MySQL database
$user = [
    'student_id' => $student_id,
    'password' => $password,
    'surname' => $surname,
    'email' => $email,
    'random_id' => $random_id
];

// Insert user data into the database table
$mysql_query = "INSERT INTO users (student_id, password, surname, email) VALUES ('$student_id', '$password', '$surname', '$email')";

// Check if user was successfully inserted into the database
if ($result = mysqli_query($conn, $mysql_query)) {
    echo "User successfully registered.";
} else {
    echo "Failed to register user: " . mysqli_error($conn);
}

?>
