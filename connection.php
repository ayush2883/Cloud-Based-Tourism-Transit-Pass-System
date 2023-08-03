<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "travel";

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die("Unable to connect to the database: " . mysqli_connect_error());
}
?>
