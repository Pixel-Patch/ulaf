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
$imageDir = $baseDir . '/ulaf/assets/uploads/items/';

// Ensure directories exist
if (!is_dir($imageDir)) {
  mkdir($imageDir, 0777, true);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Debugging: log received data
  error_log(print_r($_POST, true));

  // Retrieve form data
  $itemName = isset($_POST['itemName']) ? $_POST['itemName'] : '';
  $itemType = isset($_POST['itemType']) ? $_POST['itemType'] : '';
  $itemCategory = isset($_POST['itemCategory']) ? $_POST['itemCategory'] : '';
  $itemCurrentLocation = isset($_POST['itemCurrentLocation']) ? $_POST['itemCurrentLocation'] : '';
  $pinLatitude = isset($_POST['latitude']) ? $_POST['latitude'] : '';
  $pinLongitude = isset($_POST['longitude']) ? $_POST['longitude'] : '';
  $pinLocation = isset($_POST['addpinlocation']) ? $_POST['addpinlocation'] : '';
  $itemStatus = isset($_POST['itemStatus']) ? $_POST['itemStatus'] : '';
  $itemDescription = isset($_POST['itemDescription']) ? $_POST['itemDescription'] : '';
  $posterID = isset($_POST['posterID']) ? $_POST['posterID'] : '';

  // Debugging: log retrieved data
  error_log("Pin Location: $pinLocation");

  // Handle multiple image uploads
  $imageNames = [];
  if (!empty($_FILES['itemImages']['name'][0])) {
    $imageCount = count($_FILES['itemImages']['name']);
    if ($imageCount > 3) {
      $errors[] = 'You can upload a maximum of 3 images';
    }

    $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
    foreach ($_FILES['itemImages']['tmp_name'] as $key => $tmp_name) {
      $fileName = $_FILES['itemImages']['name'][$key];
      $fileTmpName = $_FILES['itemImages']['tmp_name'][$key];
      $fileSize = $_FILES['itemImages']['size'][$key];
      $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
      if (in_array($fileExtension, $allowedExtensions)) {
        $newFileName = $itemCategory . '-' . $posterID . '-' . time() . '-' . $key . '.' . $fileExtension;
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
    $sql = "INSERT INTO items (Item_Name, Image, Type, Category_ID, Description, Posted_Date, Current_Location, Item_Status, Latitude, Longitude, Pin_Location, Poster_ID) VALUES (?, ?, ?, ?, ?, NOW(), ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
      die('Error preparing statement: ' . $conn->error);
    }
    $stmt->bind_param("sssssssdsss", $itemName, $imagesJson, $itemType, $itemCategory, $itemDescription, $itemCurrentLocation, $itemStatus, $pinLatitude, $pinLongitude, $pinLocation, $posterID);

    if ($stmt->execute()) {
      http_response_code(201);
      
     echo "<script>window.location.href = 'item-list.php';</script>";
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
