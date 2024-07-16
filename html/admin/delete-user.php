<?php
// delete-user.php

// Include the database connection file
include 'dbconn.php';

// Check if user_id is provided in the GET request
if (!isset($_GET['user_id']) || empty($_GET['user_id'])) {
  echo 'Failed to delete user: User ID is not available.';
  exit();
}

// Get the user_id from the GET request
$user_id = $_GET['user_id'];

// Debugging output to ensure the correct user_id is received
echo 'Received user_id: ' . $user_id . "\n";

// Prepare and bind the SQL statement
$stmt = $conn->prepare("DELETE FROM users WHERE User_ID = ?");
if ($stmt === false) {
  echo 'Failed to delete user: SQL statement preparation failed.';
  exit();
}

$stmt->bind_param("s", $user_id); // Assuming User_ID is a string

// Execute the statement
if ($stmt->execute()) {
  if ($stmt->affected_rows > 0) {
    echo 'success';
  } else {
    echo 'Failed to delete user: User ID not found.';
  }
} else {
  echo 'Failed to delete user: SQL execution failed.';
}

// Close the statement and connection
$stmt->close();
$conn->close();
