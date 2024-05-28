<?php
phpinfo();
// Include the database connection file
require_once 'dbconn.php';

// Initialize error messages and flags
$errors = [];
$hasErrors = false;

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $userID = isset($_POST['adduserid']) ? $_POST['adduserid'] : '';
  $userType = isset($_POST['addrole']) ? $_POST['addrole'] : '';
  $fullName = isset($_POST['addfullname']) ? $_POST['addfullname'] : '';
  $username = isset($_POST['addusername']) ? $_POST['addusername'] : '';
  $password = isset($_POST['addpassword']) ? $_POST['addpassword'] : '';
  $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
  $email = isset($_POST['addemail']) ? $_POST['addemail'] : ''; // Fixed space in the key
  $college = isset($_POST['add-user-college-add']) ? $_POST['add-user-college-add'] : '';
  $course = isset($_POST['addcourse']) ? $_POST['addcourse'] : '';
  $clsuAddress = isset($_POST['addclsuaddress']) ? $_POST['addclsuaddress'] : '';
  $contact = isset($_POST['addcontact']) ? $_POST['addcontact'] : '';
  $homeAddress = isset($_POST['addhomeaddress']) ? $_POST['addhomeaddress'] : '';
  $socialLinks = isset($_POST['addlinks']) ? $_POST['addlinks'] : '';

  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // If there are no errors, proceed with uploading files and inserting data into the database
  if (!$hasErrors) {
    // Define the target directory and file names
    $targetDir = "S:\\xampp\\htdocs\\ulaf\\assets\\uploads\\";
    $avatarFileName = basename($_FILES["addavatar"]["name"] ?? '');
    $idImageFileName = basename($_FILES["addclsuidimage"]["name"] ?? '');
    $targetFilePathAvatar = $targetDir . '\\' . $avatarFileName;
    $targetFilePathIDImage = $targetDir . '\\' . $idImageFileName;

    // Check if file inputs are set before checking for upload errors
    if (isset($_FILES["addavatar"]) && $_FILES["addavatar"]["error"] !== UPLOAD_ERR_OK) {
      echo "Error uploading avatar: " . $_FILES["addavatar"]["error"];
    }

    if (isset($_FILES["addclsuidimage"]) && $_FILES["addclsuidimage"]["error"] !== UPLOAD_ERR_OK) {
      echo "Error uploading ID image: " . $_FILES["addclsuidimage"]["error"];
    }

    // Check if files were uploaded
    if ((isset($_FILES["addavatar"]) && ($_FILES["addavatar"]["error"] ?? UPLOAD_ERR_NO_FILE) == UPLOAD_ERR_OK) && (isset($_FILES["addclsuidimage"]) && ($_FILES["addclsuidimage"]["error"] ?? UPLOAD_ERR_NO_FILE) == UPLOAD_ERR_OK)) {
      // Move the uploaded files to the target directory
      if (move_uploaded_file($_FILES["addavatar"]["tmp_name"], $targetFilePathAvatar) && move_uploaded_file($_FILES["addclsuidimage"]["tmp_name"], $targetFilePathIDImage)) {
        echo "The files " . basename($_FILES["addavatar"]["name"]) . " and " . basename($_FILES["addclsuidimage"]["name"]) . " have been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your files. <br>";
        echo "Avatar error: " . ($_FILES["addavatar"]["error"] ?? 'Unknown error') . "<br>";
        echo "ID Image error: " . ($_FILES["addclsuidimage"]["error"] ?? 'Unknown error') . "<br>";
        $hasErrors = true;
      }
    } elseif (isset($_FILES["addavatar"]) && ($_FILES["addavatar"]["error"] ?? UPLOAD_ERR_NO_FILE != UPLOAD_ERR_OK)) {
      // No avatar was uploaded, set a default avatar or leave the field blank
      $targetFilePathAvatar = "default_avatar.jpg"; // Replace with your default avatar file path
    } elseif (isset($_FILES["addclsuidimage"]) && ($_FILES["addclsuidimage"]["error"] ?? UPLOAD_ERR_NO_FILE != UPLOAD_ERR_OK)) {
      // No ID image was uploaded, set a default ID image or leave the field blank
      $targetFilePathIDImage = "default_id_image.jpg"; // Replace with your default ID image file path
    }

    // Insert the data into the database
    $sql = "INSERT INTO ulaf.users (User_ID, role, Username, FullName, User_Type, Password, Email, College, Course, Home_Address, CLSU_Address, Contact, Social_Links, Avatar_Image, CLSU_ID_Image)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
      die('Error preparing statement: ' . $conn->error);
    }
    $stmt->bind_param("sssssssssssssss", $userID, $userType, $username, $fullName, $userType, $hashedPassword, $email, $college, $course, $homeAddress, $clsuAddress, $contact, $socialLinks, $targetFilePathAvatar, $targetFilePathIDImage);

    if ($stmt->execute()) {
      http_response_code(201);
      $message = "New user has been registered successfully!";
      $redirect_url = "S:\\xampp\\htdocs\\ulaf\\html\\admin\\end_user_list.php?message=" . urlencode($message);
      header("Location: $redirect_url");
      exit();
    } else {
      http_response_code(500);
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
  }
}
