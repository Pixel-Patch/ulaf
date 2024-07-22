<?php
ob_start(); // Start output buffering

// Include the database connection file
require_once 'dbconn.php'; // Make sure to update this to your actual database connection file

// Initialize error messages and flags
$errors = [];
$hasErrors = false;

// Determine base directory dynamically
$baseDir = realpath(dirname(__FILE__) . '/../../..');

// Define target directories
$imageDir = $baseDir . '/ulaf/assets/uploads/proofs/';

// Ensure directories exist
if (!is_dir($imageDir)) {
  mkdir($imageDir, 0777, true);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Debugging: log received data
  error_log(print_r($_POST, true));

  // Retrieve form data
  $itemID = isset($_POST['itemID']) ? $_POST['itemID'] : '';
  $claimerID = isset($_POST['claimerID']) ? $_POST['claimerID'] : '';
  $claimStatus = isset($_POST['claimStatus']) ? $_POST['claimStatus'] : '';
  $verificationStatus = isset($_POST['verificationStatus']) ? $_POST['verificationStatus'] : '';
  $proof = isset($_POST['proof']) ? $_POST['proof'] : '';

  // Handle multiple image uploads
  $imageNames = [];
  if (!empty($_FILES['proofImage']['name'][0])) {
    $imageCount = count($_FILES['proofImage']['name']);

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    foreach ($_FILES['proofImage']['tmp_name'] as $key => $tmp_name) {
      $fileName = $_FILES['proofImage']['name'][$key];
      $fileTmpName = $_FILES['proofImage']['tmp_name'][$key];
      $fileSize = $_FILES['proofImage']['size'][$key];
      $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
      if (in_array($fileExtension, $allowedExtensions)) {
        $newFileName = $itemID . '-' . $claimerID . '-' . $key . '.' . $fileExtension;
        $targetFilePath = $imageDir . $newFileName;
        if (move_uploaded_file($fileTmpName, $targetFilePath)) {
          $imageNames[] = $newFileName;
        } else {
          $errors[] = 'Error uploading file: ' . $fileName;
        }
      } else {
        $errors[] = 'Invalid file type for file: ' . $fileName . '. Allowed types: jpg, jpeg, png, gif.';
      }
    }
  }

  if (empty($errors)) {
    // Convert image names array to a comma-separated string
    $imagesJson = implode(',', $imageNames);

    // Proceed with database insertion
    $sql = "INSERT INTO claims (Item_ID, Claimer_ID, Claim_Status, Proof, Proof_Image, Returned_Image, Remarks, Claim_Date, Verification_Status, Verification_Date, Claim_Again) VALUES (?, ?, ?, ?, ?, NULL, NULL, NOW(), ?, NULL, NULL)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
      die('Error preparing statement: ' . $conn->error);
    }
    $stmt->bind_param("ssssss", $itemID, $claimerID, $claimStatus, $proof, $imagesJson, $verificationStatus);

    if ($stmt->execute()) {
      http_response_code(201);

      echo "<script>window.location.href = 'item-claims.php';</script>";
      exit();
    } else {
      http_response_code(500);
      $errors[] = "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
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
