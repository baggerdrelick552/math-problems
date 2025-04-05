<?php
// Define variables and constants
$server = "localhost";
$username = "root";
$password = "";
$dbname = "mathproblems";

// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if ($conn) {
    echo "Connected successfully";
} else {
    echo "Connection failed.";
}

// Close connection
mysqli_close($conn);
?>
