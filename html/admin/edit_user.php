<?php
ob_start(); // Start output buffering

// Include the database connection file
require_once 'dbconn.php';

// Initialize error messages and flags
$errors = [];
$hasErrors = false;

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userID = isset($_POST['edituserid']) ? $_POST['edituserid'] : '';
    $userType = isset($_POST['editrole']) ? $_POST['editrole'] : '';
    $fullName = isset($_POST['editfullname']) ? $_POST['editfullname'] : '';
    $username = isset($_POST['editusername']) ? $_POST['editusername'] : '';
    $password = isset($_POST['editpassword']) ? $_POST['editpassword'] : '';
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
    $email = isset($_POST['editemail']) ? $_POST['editemail'] : ''; // Fixed space in the key
    $college = isset($_POST['editcollege']) ? $_POST['editcollege'] : '';
    $course = isset($_POST['editcourse']) ? $_POST['editcourse'] : '';
    $clsuAddress = isset($_POST['editclsuaddress']) ? $_POST['editclsuaddress'] : '';
    $contact = isset($_POST['editcontact']) ? $_POST['editcontact'] : '';
    $homeAddress = isset($_POST['edithomeaddress']) ? $_POST['edithomeaddress'] : '';
    $socialLinks = isset($_POST['editlinks']) ? $_POST['editlinks'] : '';

    // Hash the password if it's not empty
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // If there are no errors, proceed with uploading files and updating data in the database
    if (!$hasErrors) {
        // Define the target directory and file names
        $targetDir = "S:\\xampp\\htdocs\\ulaf\\assets\\uploads\\";
        $avatarFileName = basename($_FILES["editavatar"]["name"] ?? '');
        $idImageFileName = basename($_FILES["editclsuidimage"]["name"] ?? '');
        $targetFilePathAvatar = $targetDir . '\\' . $avatarFileName;
        $targetFilePathIDImage = $targetDir . '\\' . $idImageFileName;

        // Check if file inputs are set before checking for upload errors
        if (isset($_FILES["editavatar"]) && $_FILES["editavatar"]["error"] !== UPLOAD_ERR_OK) {
            // Remove echo statement
        }

        if (isset($_FILES["editclsuidimage"]) && $_FILES["editclsuidimage"]["error"] !== UPLOAD_ERR_OK) {
            // Remove echo statement
        }

        // Check if files were uploaded
        if ((isset($_FILES["editavatar"]) && ($_FILES["editavatar"]["error"] ?? UPLOAD_ERR_NO_FILE) == UPLOAD_ERR_OK) && (isset($_FILES["editclsuidimage"]) && ($_FILES["editclsuidimage"]["error"] ?? UPLOAD_ERR_NO_FILE) == UPLOAD_ERR_OK)) {
            // Move the uploaded files to the target directory
            if (move_uploaded_file($_FILES["editavatar"]["tmp_name"], $targetFilePathAvatar) && move_uploaded_file($_FILES["editclsuidimage"]["tmp_name"], $targetFilePathIDImage)) {
                // Update the data in the database
                $sql = "UPDATE ulaf.users SET role = ?, Username = ?, FullName = ?, Password = ?, Email = ?, College = ?, Course = ?, Home_Address = ?, CLSU_Address = ?, Contact = ?, Social_Links = ?, Avatar_Image = ?, CLSU_ID_Image = ?";
                $sql .= " WHERE User_ID = ?";
                $stmt = $conn->prepare($sql);
                if ($stmt === false) {
                    die('Error preparing statement: ' . $conn->error);
                }
                // Fix the type definition string to match the number of bind variables
                $stmt->bind_param("ssssssssssssssi", $userType, $username, $fullName, $hashedPassword, $email, $college, $course, $homeAddress, $clsuAddress, $contact, $socialLinks, $avatarFileName, $idImageFileName, $userID);

                if ($stmt->execute()) {
                    http_response_code(200);
                    $message = "User has been updated successfully!";
                    // Use JavaScript to redirect the user without displaying the message
                    echo "<script>window.location.href = 'end-user_list.php';</script>";
                    exit();
                } else {
                    http_response_code(500);
                    $message = "Error: " . $sql . "<br>" . $conn->error;
                    // Use JavaScript to redirect the user without displaying the message
                    echo "<script>window.location.href = 'end-user_list.php';</script>";
                    exit();
                }

                $stmt->close();
            } else {
                // Remove echo statements
                $hasErrors = true;
            }
        } elseif (isset($_FILES["editavatar"]) && ($_FILES["editavatar"]["error"] ?? UPLOAD_ERR_NO_FILE != UPLOAD_ERR_OK)) {
            // No avatar was uploaded, set a default avatar or leave the field blank
            $targetFilePathAvatar = "default_avatar.jpg"; // Replace with your default avatar file path
        } elseif (isset($_FILES["editclsuidimage"]) && ($_FILES["editclsuidimage"]["error"] ?? UPLOAD_ERR_NO_FILE != UPLOAD_ERR_OK)) {
            // No ID image was uploaded, set a default ID image or leave the field blank
            $targetFilePathIDImage = "default_id_image.jpg"; // Replace with your default ID image file path
        }
    }
}

ob_end_flush(); // End output buffering and send any buffered output to the browser
