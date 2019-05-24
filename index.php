<?php
$servername = "34.66.253.235";
$username = "blogdbuser";
$password = "simple";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>