<?php
// fetch-userids.php

// Include your database connection script
require 'dbconn.php';

// Query to fetch User_ID from users table
$sql = "SELECT User_ID FROM users";
$result = $conn->query($sql);

// Fetch data and encode into JSON format
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row; // Assuming User_ID is a key in $row
}

// Return JSON response
header('Content-Type: application/json');
echo json_encode($data);

// Close connection
$conn->close();
