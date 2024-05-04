<?php

require_once('dbconn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signin'])) {
    $u = trim($_POST['email_username']);
    $p = trim($_POST['password']);

    if (empty($u) || empty($p)) {
        $_SESSION['loginError'] = 'Please enter both username/email and password.';
    } else {
        $sql = "SELECT user_id, Username, Email, Password, User_Type FROM ulaf.users WHERE Email=? OR Username=? LIMIT 1";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die('Error preparing statement: ' . $conn->error);
        }

        $stmt->bind_param("ss", $u, $u); // Bind the $u variable twice
        if ($stmt->execute() === false) {
            die('Error executing statement: ' . $stmt->error);
        }

        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            $_SESSION['loginError'] = 'Failed to Login! User not found.';
        } else {
            $row = $result->fetch_assoc();
            if (!password_verify($p, $row['Password'])) { // Use password_verify to compare hashed passwords
                $_SESSION['loginError'] = 'Failed to Login! Password incorrect.';
            } else {
                $_SESSION['user_type'] = $row['User_Type'];
                $_SESSION['user_id'] = $row['user_id']; // You can also save other session information here
                $redirectMap = [
                    'student' => 'C:\\xampp\\htdocs\\ulaf\\html\\user\\checkout-page.php',
                    'faculty' => '../../user/checkout-page.php',
                    'staff' => '../../user/checkout-page.php',
                    'admin' => 'admin_list.php'
                ];
                $redirectUrl = $redirectMap[$_SESSION['user_type']] ?? 'index.php';
                header("Location: $redirectUrl");
                exit();
            }
        }
    }
}

if (isset($_SESSION['loginError'])) {
    echo '<p class="text-danger">Error: ' . $_SESSION['loginError'] . '</p>';
    unset($_SESSION['loginError']);
}
