<?php
if (!file_exists('config.php')) {
    die('Error: config.php not found');
}
include('config.php');

// Create connection
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// Set charset
$conn->set_charset("utf8mb4");
