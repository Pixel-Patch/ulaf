<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'dbconn.php';

if (isset($_POST['signin'])) {
    $u = trim($_POST['email_username']);
    $p = trim($_POST['password']);

    echo "Email/Username: $u<br>";
    echo "Password: $p<br>";

    $sql = "SELECT * FROM ulaf.users WHERE Email=? OR Username=?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die('Error preparing statement: ' . $conn->error);
    }

    $stmt->bind_param("ss", $u, $u);

    if ($stmt->execute() === false) {
        die('Error executing statement: ' . $stmt->error);
    }

    $result = $stmt->get_result();

    echo "Number of rows returned: " . $result->num_rows . "<br>";

    if ($result->num_rows === 0) {
        $_SESSION['loginError'] = 'Failed to Login! User not found';
    } else {
        $row = $result->fetch_assoc();
        echo "Hashed password from DB: " . $row['Password'] . "<br>";

        if (!password_verify($p, $row['Password'])) {
            $_SESSION['loginError'] = 'Failed to Login! Incorrect password';
        } else {
            $_SESSION['user_type'] = $row['User_Type'];
            // Redirect based on user type
            $redirectMap = [
                'student' => 'index.php',
                'faculty' => 'index.php',
                'staff' => 'index.php',
            ];
            $redirectUrl = $redirectMap[$row['User_Type']] ?? 'index.php';
            header("Location: $redirectUrl");
            exit();
        }
    }
}

if (isset($_SESSION['loginError'])) :
?>
    <!-- Login error modal here -->
<?php
    // Clear the error message after displaying it
    unset($_SESSION['loginError']);
endif;
?>