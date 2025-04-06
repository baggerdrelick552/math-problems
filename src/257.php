<?php
// Define variables
$student_id = "123456"; // Replace with actual student ID
$password = "password"; // Replace with actual password

// Connect to database
$db_connection = mysqli_connect("localhost", "username", "password", "database_name");

// Check if connection was successful
if ($db_connection) {
    echo "Connection is successful";
} else {
    echo "Failed to connect to the database.";
}

// Close connection
mysqli_close($db_connection);
?>
