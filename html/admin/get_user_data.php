<?php
require_once 'dbconn.php';

// Retrieve user ID from GET data
$userId = isset($_GET['user_id']) ? $_GET['user_id'] : '';

// Initialize an empty array for the user data
$user = array();

if (!empty($userId)) {
    // Retrieve user data from the database
    $sql = "SELECT * FROM ulaf.users WHERE User_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
    }

    // Close the statement
    $stmt->close();
}


