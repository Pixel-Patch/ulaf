<?php
require 'dbconn.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $userID = $_POST['userID'];
  $userType = $_POST['userType'];
  $username = $_POST['username'];
  $userFullname = $_POST['userFullname'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];
  $userEmail = $_POST['userEmail'];
  $college = $_POST['add-user-college-add'];
  $course = $_POST['add-user-course-add'];
  $clsuAddress = $_POST['clsuAddress'];
  $userContact = $_POST['userContact'];
  $homeAddress = $_POST['homeAddress'];
  $socialLinks = $_POST['socialLinks'];

  // Validate and sanitize your data here...

  // Handle CLSU ID Image
  $clsuIdImage = $_FILES['clsuIdImage'];
  $clsuIdImageName = $userID . '.' . pathinfo($clsuIdImage['name'], PATHINFO_EXTENSION);
  $clsuIdImagePath = '../../assets/id/' . $clsuIdImageName;

  // Allow certain file formats
  $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
  if (in_array($clsuIdImagePath, $allowTypes)) {
    // Upload file to server
    if (move_uploaded_file($clsuIdImage['tmp_name'], $clsuIdImagePath)) {
      echo "CLSU ID Image uploaded successfully";
    } else {
      echo "Error uploading CLSU ID Image";
    }
  } else {
    echo "Invalid file type for CLSU ID Image";
  }

  // Handle Avatar Image
  $avatarImage = $_FILES['avatarImage'];
  $avatarImageName = $userID . '.' . pathinfo($avatarImage['name'], PATHINFO_EXTENSION);
  $avatarImagePath = '../../assets/avatars/' . $avatarImageName;

  // Allow certain file formats
  if (in_array($avatarImagePath, $allowTypes)) {
    // Upload file to server
    if (move_uploaded_file($avatarImage['tmp_name'], $avatarImagePath)) {
      echo "Avatar Image uploaded successfully";
    } else {
      echo "Error uploading Avatar Image";
    }
  } else {
    echo "Invalid file type for Avatar Image";
  }

  // Assuming all data is valid, insert into database
  $sql = "INSERT INTO users (User_ID, Role, Username, FullName, User_Type, Password, Email, Avatar_Image, College, Course, CLSU_ID_Image, Home_Address, CLSU_Address, Contact, Social_Links)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssssssssssss", $userID, $userType, $username, $userFullname, $userType, $password, $userEmail, $avatarImagePath, $college, $course, $clsuIdImagePath, $homeAddress, $clsuAddress, $userContact, $socialLinks);

  if ($stmt->execute()) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $stmt->close();
  $conn->close();
}
