<?php
require 'dbconn.php';

// Assuming you're using POST method to submit your form
$userIDnumber = isset($_POST['userIDnumber']) ? $_POST['userIDnumber'] : '';
$userRole = isset($_POST['userRole']) ? $_POST['userRole'] : '';
$userUsername = isset($_POST['userUsername']) ? $_POST['userUsername'] : '';
$userPassword = isset($_POST['userPassword']) ? $_POST['userPassword'] : '';

// Hash the password
$hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

// First, check if the User_ID exists in the users table
$checkQuery = "SELECT * FROM users WHERE User_ID = ?";
$checkStmt = $conn->prepare($checkQuery);
if (!$checkStmt) {
  die("Prepare statement error: " . $conn->error);
}
$checkStmt->bind_param("s", $userIDnumber);
$checkStmt->execute();
$result = $checkStmt->get_result();

if ($result->num_rows > 0) {
  // If User_ID exists in users table, insert into employees table
  $insertQuery = "INSERT INTO employees (User_ID, Role, Username, Password) VALUES (?, ?, ?, ?)";
  $insertStmt = $conn->prepare($insertQuery);
  if (!$insertStmt) {
    die("Prepare statement error: " . $conn->error);
  }
  $insertStmt->bind_param("ssss", $userIDnumber, $userRole, $userUsername, $hashedPassword);

  if ($insertStmt->execute()) {
    echo "New employee added successfully";
  } else {
    echo "Execute error: " . $insertStmt->error;
  }
} else {
  echo "User_ID does not exist in users table. Please register in users table first.";
}

$conn->close();
