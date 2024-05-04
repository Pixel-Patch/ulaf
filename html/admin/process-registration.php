<?php
require_once 'dbconn.php';

// Initialize error messages and flags
$errors = [];
$hasErrors = false;

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userID = isset($_POST['formValidationUserID']) ? $_POST['formValidationUserID'] : '';
    $username = isset($_POST['formValidationUsername']) ? $_POST['formValidationUsername'] : '';
    $fullName = isset($_POST['formValidationFullname']) ? $_POST['formValidationFullname'] : '';
    $userType = isset($_POST['User_Type']) ? $_POST['User_Type'] : '';
    $password = isset($_POST['formValidationPass']) ? $_POST['formValidationPass'] : '';
    $confirmPassword = isset($_POST['formValidationConfirmPass']) ? $_POST['formValidationConfirmPass'] : '';
    $email = isset($_POST['formValidationEmail']) ? $_POST['formValidationEmail'] : '';
    $college = isset($_POST['formValidationCollege']) ? $_POST['formValidationCollege'] : '';
    $course = isset($_POST['formValidationCourse']) ? $_POST['formValidationCourse'] : '';
    $homeAddress = isset($_POST['formValidationHomeAddress']) ? $_POST['formValidationHomeAddress'] : '';
    $clsuAddress = isset($_POST['formValidationCLSUAddress']) ? $_POST['formValidationCLSUAddress'] : '';
    $contact = isset($_POST['formValidationContact']) ? $_POST['formValidationContact'] : '';
    $socialLinks = isset($_POST['formValidationOtherSocialLinks']) ? $_POST['formValidationOtherSocialLinks'] : '';

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // If there are no errors, proceed with uploading files and inserting data into the database
    if (!$hasErrors) {
        // Define the target directory and file names
        $targetDir = "C:\\xampp\\htdocs\\ulaf\\assets\\uploads";
        $avatarFileName = basename($_FILES["formValidationAvatar"]["name"] ?? '');
        $idImageFileName = basename($_FILES["formValidationIDImage"]["name"] ?? '');
        $targetFilePathAvatar = $targetDir . '\\' . $avatarFileName;
        $targetFilePathIDImage = $targetDir . '\\' . $idImageFileName;

        // Check for upload errors
        if ($_FILES["formValidationAvatar"]["error"] !== UPLOAD_ERR_OK) {
            echo "Error uploading avatar: " . $_FILES["formValidationAvatar"]["error"];
        }

        if ($_FILES["formValidationIDImage"]["error"] !== UPLOAD_ERR_OK) {
            echo "Error uploading ID image: " . $_FILES["formValidationIDImage"]["error"];
        }

        // Check if files were uploaded
        if (($_FILES["formValidationAvatar"]["error"] ?? UPLOAD_ERR_NO_FILE) == UPLOAD_ERR_OK && ($_FILES["formValidationIDImage"]["error"] ?? UPLOAD_ERR_NO_FILE) == UPLOAD_ERR_OK) {
            // Move the uploaded files to the target directory
            if (move_uploaded_file($_FILES["formValidationAvatar"]["tmp_name"], $targetFilePathAvatar) && move_uploaded_file($_FILES["formValidationIDImage"]["tmp_name"], $targetFilePathIDImage)) {
                echo "The files " . basename($_FILES["formValidationAvatar"]["name"]) . " and " . basename($_FILES["formValidationIDImage"]["name"]) . " have been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your files. <br>";
                echo "Avatar error: " . ($_FILES["formValidationAvatar"]["error"] ?? 'Unknown error') . "<br>";
                echo "ID Image error: " . ($_FILES["formValidationIDImage"]["error"] ?? 'Unknown error') . "<br>";
                $hasErrors = true;
            }
        } elseif ($_FILES["formValidationAvatar"]["error"] ?? UPLOAD_ERR_NO_FILE != UPLOAD_ERR_OK) {
            // No avatar was uploaded, set a default avatar or leave the field blank
            $targetFilePathAvatar = "default_avatar.jpg"; // Replace with your default avatar file path
        } elseif ($_FILES["formValidationIDImage"]["error"] ?? UPLOAD_ERR_NO_FILE != UPLOAD_ERR_OK) {
            // No ID image was uploaded, set a default ID image or leave the field blank
            $targetFilePathIDImage = "default_id_image.jpg"; // Replace with your default ID image file path
        }

        // Insert the data into the database
        $sql = "INSERT INTO ulaf.users (User_ID, Username, Fullname, User_Type, Password, Email, College, Course, Home_Address, CLSU_Address, Contact, Social_Links, Avatar_Image, CLSU_ID_Image)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die('Error preparing statement: ' . $conn->error);
        }
        $stmt->bind_param("ssssssssssssss", $userID, $username, $fullName, $userType, $hashedPassword, $email, $college, $course, $homeAddress, $clsuAddress, $contact, $socialLinks, $targetFilePathAvatar, $targetFilePathIDImage);

        if ($stmt->execute()) {
            echo "New user has been registered successfully!";
            // Redirect to auth-login-cover.php
            header("Location: auth-login-cover.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $stmt->close();
    }
}

$conn->close();
