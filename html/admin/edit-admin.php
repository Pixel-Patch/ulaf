<?php
ob_start();
require_once 'dbconn.php';

$errors = [];
$hasErrors = false;

$baseDir = realpath(dirname(__FILE__) . '/../../..');
$avatarDir = $baseDir . '/ulaf/assets/uploads/admin-avatar/';

if (!is_dir($avatarDir)) {
    mkdir($avatarDir, 0777, true);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user ID from the URL
    $userID = isset($_GET['id']) ? $_GET['id'] : '';

    $userRole = isset($_POST['editrole']) ? $_POST['editrole'] : '';
    $username = isset($_POST['editusername']) ? $_POST['editusername'] : '';
    $password = isset($_POST['editpassword']) ? $_POST['editpassword'] : '';
    $confirmPassword = isset($_POST['formValidationConfirmPass']) ? $_POST['formValidationConfirmPass'] : '';
    $email = isset($_POST['editemail']) ? $_POST['editemail'] : '';
    $contact = isset($_POST['editcontact']) ? $_POST['editcontact'] : '';

    // Validation
    if (empty($userID)) {
        $errors[] = 'User ID is required.';
    }
    if (empty($userRole)) {
        $errors[] = 'User Role is required.';
    }
    if (empty($username)) {
        $errors[] = 'Username is required.';
    }
    if (!empty($password) && $password !== $confirmPassword) {
        $errors[] = 'Passwords do not match.';
    }
    if (empty($email)) {
        $errors[] = 'Email is required.';
    }
    if (empty($contact)) {
        $errors[] = 'Contact is required.';
    }

    // Debugging: Print received user ID
    error_log("Received User ID: $userID");

    $sql = "SELECT * FROM employee WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        $updateFields = [];
        $updateValues = [];

        if (!empty($userRole)) {
            $updateFields[] = "user_role = ?";
            $updateValues[] = $userRole;
        }
        if (!empty($username)) {
            $updateFields[] = "username = ?";
            $updateValues[] = $username;
        }
        if (!empty($password)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $updateFields[] = "password = ?";
            $updateValues[] = $hashedPassword;
        }
        if (!empty($email)) {
            $updateFields[] = "email = ?";
            $updateValues[] = $email;
        }
        if (!empty($contact)) {
            $updateFields[] = "contact = ?";
            $updateValues[] = $contact;
        }

        if (isset($_FILES["editavatar"]) && $_FILES["editavatar"]["error"] == UPLOAD_ERR_OK) {
            $avatarFileExtension = pathinfo($_FILES["editavatar"]["name"], PATHINFO_EXTENSION);
            $avatarFileName = $userID . '.' . $avatarFileExtension;
            $targetFilePathAvatar = $avatarDir . $avatarFileName;

            if (move_uploaded_file($_FILES["editavatar"]["tmp_name"], $targetFilePathAvatar)) {
                $updateFields[] = "avatar_image = ?";
                $updateValues[] = $avatarFileName;
            } else {
                $errors[] = "Failed to upload avatar image.";
            }
        }

        if (empty($errors) && !empty($updateFields)) {
            $updateValues[] = $userID;
            $sql = "UPDATE employee SET " . implode(", ", $updateFields) . " WHERE id = ?";
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                die('Error preparing statement: ' . $conn->error);
            }

            $stmt->bind_param(str_repeat("s", count($updateValues)), ...$updateValues);

            if ($stmt->execute()) {
                http_response_code(200);
                echo "<script>window.location.href = 'admin-list.php';</script>";
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

ob_end_flush();
