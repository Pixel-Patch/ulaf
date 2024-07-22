<?php
// delete-user.php

// Include the database connection file
include 'dbconn.php';

// Get the item ID from the query string
$itemId = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($itemId > 0) {
  // Prepare and bind
  $stmt = $conn->prepare("DELETE FROM items WHERE Item_ID = ?");
  $stmt->bind_param("i", $itemId);

  // Execute the statement
  if ($stmt->execute()) {
    echo "success";
  } else {
    echo "error: " . $stmt->error;
  }

  // Close the statement
  $stmt->close();
} else {
  echo "Invalid item ID.";
}

// Close the connection
$conn->close();
?>