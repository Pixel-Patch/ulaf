<?php
// Define your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ulaf";

// Create a new mysqli object with your database credentials
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
  // If the connection failed, output an error message and exit
  die("Connection failed: " . $conn->connect_error);
}

// If the connection was successful, output a success message
echo "Connected successfully";

// Do your database operations here
