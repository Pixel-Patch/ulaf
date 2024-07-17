<?php

// Include the database connection file
include 'dbconn.php';

// Check if id is provided in the GET request
if (!isset($_GET['id']) || empty($_GET['id'])) {
  echo 'Failed to delete user: User ID is not available.';
  exit();
}

// Get the id from the GET request
$id = $_GET['id'];

// Debugging output to ensure the correct id is received
echo 'Received id: ' . $id . "\n";

// Prepare and bind the SQL statement
$stmt = $conn->prepare("DELETE FROM employee WHERE id = ?");
if ($stmt === false) {
  echo 'Failed to delete user: SQL statement preparation failed.';
  exit();
}

$stmt->bind_param("s", $id); // Assuming id is a string

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
