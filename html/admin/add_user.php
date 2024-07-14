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
$avatarDir = $baseDir . '/ulaf/assets/uploads/user-avatar/';
$idDir = $baseDir . '/ulaf/assets/uploads/clsu-id/';
$itemDir = $baseDir . '/ulaf/assets/uploads/items/';

// Ensure directories exist
if (!is_dir($avatarDir)) {
  mkdir($avatarDir, 0777, true);
}
if (!is_dir($idDir)) {
  mkdir($idDir, 0777, true);
}
if (!is_dir($itemDir)) {
  mkdir($itemDir, 0777, true);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $userID = isset($_POST['adduserid']) ? $_POST['adduserid'] : '';
  $userType = isset($_POST['addrole']) ? $_POST['addrole'] : '';
  $fullName = isset($_POST['addfullname']) ? $_POST['addfullname'] : '';
  $username = isset($_POST['addusername']) ? $_POST['addusername'] : '';
  $password = isset($_POST['addpassword']) ? $_POST['addpassword'] : '';
  $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
  $email = isset($_POST['addemail']) ? $_POST['addemail'] : '';
  $college = isset($_POST['addcollege']) ? $_POST['addcollege'] : '';
  $course = isset($_POST['addcourse']) ? $_POST['addcourse'] : '';
  $clsuAddress = isset($_POST['addclsuaddress']) ? $_POST['addclsuaddress'] : '';
  $contact = isset($_POST['addcontact']) ? $_POST['addcontact'] : '';
  $homeAddress = isset($_POST['addhomeaddress']) ? $_POST['addhomeaddress'] : '';
  $socialLinks = isset($_POST['addlinks']) ? $_POST['addlinks'] : '';

  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // If there are no errors, proceed with uploading files and inserting data into the database
  if (!$hasErrors) {
    $avatarFileName = "default_avatar.jpg";
    $idImageFileName = "default_id_image.jpg";

    if (isset($_FILES["addavatar"]) && $_FILES["addavatar"]["error"] == UPLOAD_ERR_OK) {
      $avatarFileExtension = pathinfo($_FILES["addavatar"]["name"], PATHINFO_EXTENSION);
      $avatarFileName = $userID . '.' . $avatarFileExtension;
      $targetFilePathAvatar = $avatarDir . $avatarFileName;

      if (!move_uploaded_file($_FILES["addavatar"]["tmp_name"], $targetFilePathAvatar)) {
        $errors[] = "Failed to upload avatar image.";
      }
    }

    if (isset($_FILES["addclsuidimage"]) && $_FILES["addclsuidimage"]["error"] == UPLOAD_ERR_OK) {
      $idImageFileExtension = pathinfo($_FILES["addclsuidimage"]["name"], PATHINFO_EXTENSION);
      $idImageFileName = $userID . '.' . $idImageFileExtension;
      $targetFilePathIDImage = $idDir . $idImageFileName;

      if (!move_uploaded_file($_FILES["addclsuidimage"]["tmp_name"], $targetFilePathIDImage)) {
        $errors[] = "Failed to upload ID image.";
      }
    }

    if (empty($errors)) {
      $sql = "INSERT INTO ulaf.users (User_ID, role, Username, FullName, Password, Email, College, Course, Home_Address, CLSU_Address, Contact, Social_Links, Avatar_Image, CLSU_ID_Image)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      if ($stmt === false) {
        die('Error preparing statement: ' . $conn->error);
      }
      $stmt->bind_param("ssssssssssssss", $userID, $userType, $username, $fullName, $hashedPassword, $email, $college, $course, $homeAddress, $clsuAddress, $contact, $socialLinks, $avatarFileName, $idImageFileName);

      if ($stmt->execute()) {
        http_response_code(201);
        echo "<script>window.location.href = 'end-user_list.php';</script>";
        exit();
      } else {
        http_response_code(500);
        $errors[] = "Error: " . $sql . "<br>" . $conn->error;
      }

      $stmt->close();
    } else {
      http_response_code(400);
      foreach ($errors as $error) {
        echo $error . "<br>";
      }
    }
  }
}

ob_end_flush(); // End output buffering and send any buffered output to the browser
