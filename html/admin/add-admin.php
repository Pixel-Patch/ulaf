<?php
ob_start(); // Start output buffering

// Include the database connection file
require_once 'dbconn.php';

// Initialize error messages and flags
$errors = [];
$hasErrors = false;

// Determine base directory dynamically
$baseDir = realpath(dirname(__FILE__) . '/../../..');

// Define target directories
$avatarDir = $baseDir . '/ulaf/assets/uploads/admin-avatar/';

// Ensure directories exist
if (!is_dir($avatarDir)) {
  mkdir($avatarDir, 0777, true);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $userRole = isset($_POST['userRole']) ? $_POST['userRole'] : '';
  $userIDnumber = isset($_POST['adduserid']) ? $_POST['adduserid'] : '';
  $username = isset($_POST['addusername']) ? $_POST['addusername'] : '';
  $email = isset($_POST['addemail']) ? $_POST['addemail'] : '';
  $contact = isset($_POST['addcontact']) ? $_POST['addcontact'] : '';
  $password = isset($_POST['formValidationPass']) ? $_POST['formValidationPass'] : '';
  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Handle avatar image upload
  $avatarFile = $_FILES['addavatar'];
  $avatarFileName = $avatarFile['name'];
  $avatarFileTmp = $avatarFile['tmp_name'];
  $avatarFileError = $avatarFile['error'];

  // Extract file extension
  $avatarFileExt = strtolower(pathinfo($avatarFileName, PATHINFO_EXTENSION));
  $avatarNewName = $userIDnumber . '.' . $avatarFileExt;
  $avatarPath = $avatarDir . $avatarNewName;

  // Validate image file
  $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
  if (in_array($avatarFileExt, $allowedExtensions)) {
    if ($avatarFileError === 0) {
      if (move_uploaded_file($avatarFileTmp, $avatarPath)) {
        // Image uploaded successfully, proceed with database insertion
        $sql = "INSERT INTO employee (user_role, id_number, username, email, contact, password, avatar_image) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
          die('Error preparing statement: ' . $conn->error);
        }
        $stmt->bind_param("sssssss", $userRole, $userIDnumber, $username, $email, $contact, $hashedPassword, $avatarNewName);

        if ($stmt->execute()) {
          http_response_code(201);
          echo "<script>window.location.href = 'admin-list.php';</script>";
          exit();
        } else {
          http_response_code(500);
          $errors[] = "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
      } else {
        $errors[] = "Error uploading file.";
      }
    } else {
      $errors[] = "Error: " . $avatarFileError;
    }
  } else {
    $errors[] = "Invalid file type. Allowed types: jpg, jpeg, png, gif.";
  }

  // Display errors if any
  if (!empty($errors)) {
    http_response_code(400);
    foreach ($errors as $error) {
      echo $error . "<br>";
    }
  }
}

ob_end_flush(); // End output buffering and send any buffered output to the browser
