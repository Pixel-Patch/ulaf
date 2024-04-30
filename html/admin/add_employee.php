<?php
require 'dbconn.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $userRole = $_POST['userRole'];
    $userIDnumber = $_POST['userIDnumber'];
    $userUsername = $_POST['userUsername'];
    $userPassword = $_POST['userPassword'];
    $userPasswordConfirm = $_POST['userPasswordConfirm'];

    // Validate the form data
    if ($userPassword !== $userPasswordConfirm) {
        // Passwords do not match
        echo "Error: Passwords do not match.";
    } else {
        // Hash the password for security
        $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

        // Check if the selected user ID exists in the users table
        $sql = "SELECT * FROM users WHERE User_ID = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $userIDnumber);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Prepare an SQL statement to insert data into the 'employee' table
            $sql = "INSERT INTO employee (User_ID, Role, Username, Password) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);

            // Bind the parameters to the values
            $stmt->bind_param("isss", $userIDnumber, $userRole, $userUsername, $hashedPassword);

            // Execute the statement
            $stmt->execute();

            // Check if a row was inserted
            if ($stmt->affected_rows > 0) {
                echo "New user added successfully!";
            } else {
                echo "Error: Unable to add new user.";
            }

            // Close the statement
            $stmt->close();
        } else {
            // Selected user ID does not exist in the users table
            echo "Error: Selected user ID does not exist in the users table.";
        }
    }

    // Close the connection
    $conn->close();
} else {
    echo "Error: Form not submitted correctly.";
}
