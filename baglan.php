<?php
$host = 'localhost'; // MySQL database host
$db = 'ibphw'; // Your database name
$user = 'root'; // Your MySQL username
$pass = ''; // Your MySQL password

// Connect to the database
$conn = new mysqli($host, $user, $pass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>
