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
    $userID = isset($_POST['edituserid']) ? $_POST['edituserid'] : '';
    $userType = isset($_POST['editrole']) ? $_POST['editrole'] : '';
    $fullName = isset($_POST['editfullname']) ? $_POST['editfullname'] : '';
    $username = isset($_POST['editusername']) ? $_POST['editusername'] : '';
    $password = isset($_POST['editpassword']) ? $_POST['editpassword'] : '';
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';
    $email = isset($_POST['editemail']) ? $_POST['editemail'] : '';
    $college = isset($_POST['editcollege']) ? $_POST['editcollege'] : '';
    $course = isset($_POST['editcourse']) ? $_POST['editcourse'] : '';
    $clsuAddress = isset($_POST['editclsuaddress']) ? $_POST['editclsuaddress'] : '';
    $contact = isset($_POST['editcontact']) ? $_POST['editcontact'] : '';
    $homeAddress = isset($_POST['edithomeaddress']) ? $_POST['edithomeaddress'] : '';
    $socialLinks = isset($_POST['editlinks']) ? $_POST['editlinks'] : '';

    // Check if the user exists
    $sql = "SELECT * FROM ulaf.users WHERE User_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Prepare update query
        $updateFields = [];
        $updateValues = [];

        if (!empty($userType)) {
            $updateFields[] = "role = ?";
            $updateValues[] = $userType;
        }
        if (!empty($fullName)) {
            $updateFields[] = "FullName = ?";
            $updateValues[] = $fullName;
        }
        if (!empty($username)) {
            $updateFields[] = "Username = ?";
            $updateValues[] = $username;
        }
        if (!empty($password)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $updateFields[] = "Password = ?";
            $updateValues[] = $hashedPassword;
        }
        if (!empty($email)) {
            $updateFields[] = "Email = ?";
            $updateValues[] = $email;
        }
        if (!empty($college)) {
            $updateFields[] = "College = ?";
            $updateValues[] = $college;
        }
        if (!empty($course)) {
            $updateFields[] = "Course = ?";
            $updateValues[] = $course;
        }
        if (!empty($clsuAddress)) {
            $updateFields[] = "CLSU_Address = ?";
            $updateValues[] = $clsuAddress;
        }
        if (!empty($contact)) {
            $updateFields[] = "Contact = ?";
            $updateValues[] = $contact;
        }
        if (!empty($homeAddress)) {
            $updateFields[] = "Home_Address = ?";
            $updateValues[] = $homeAddress;
        }
        if (!empty($socialLinks)) {
            $updateFields[] = "Social_Links = ?";
            $updateValues[] = $socialLinks;
        }

        // Handle avatar upload
        if (isset($_FILES["editavatar"]) && $_FILES["editavatar"]["error"] == UPLOAD_ERR_OK) {
            $avatarFileExtension = pathinfo($_FILES["editavatar"]["name"], PATHINFO_EXTENSION);
            $avatarFileName = $userID . '.' . $avatarFileExtension;
            $targetFilePathAvatar = $avatarDir . $avatarFileName;

            if (move_uploaded_file($_FILES["editavatar"]["tmp_name"], $targetFilePathAvatar)) {
                $updateFields[] = "Avatar_Image = ?";
                $updateValues[] = $avatarFileName;
            } else {
                $errors[] = "Failed to upload avatar image.";
            }
        }

        // Handle CLSU ID image upload
        if (isset($_FILES["editclsuidimage"]) && $_FILES["editclsuidimage"]["error"] == UPLOAD_ERR_OK) {
            $idImageFileExtension = pathinfo($_FILES["editclsuidimage"]["name"], PATHINFO_EXTENSION);
            $idImageFileName = $userID . '.' . $idImageFileExtension;
            $targetFilePathIDImage = $idDir . $idImageFileName;

            if (move_uploaded_file($_FILES["editclsuidimage"]["tmp_name"], $targetFilePathIDImage)) {
                $updateFields[] = "CLSU_ID_Image = ?";
                $updateValues[] = $idImageFileName;
            } else {
                $errors[] = "Failed to upload ID image.";
            }
        }

        if (empty($errors) && !empty($updateFields)) {
            $updateValues[] = $userID;
            $sql = "UPDATE ulaf.users SET " . implode(", ", $updateFields) . " WHERE User_ID = ?";
            $stmt = $conn->prepare($sql);
            if ($stmt === false) {
                die('Error preparing statement: ' . $conn->error);
            }

            $stmt->bind_param(str_repeat("s", count($updateValues)), ...$updateValues);

            if ($stmt->execute()) {
                http_response_code(200);
                echo "<script>window.location.href = 'end-user-list.php';</script>";
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
    } else {
        http_response_code(404);
        echo "User not found.";
    }
}

ob_end_flush(); // End output buffering and send any buffered output to the browser
