<?php
require_once 'dbconn.php';

// Retrieve admin ID from GET data
$adminId = isset($_GET['id']) ? $_GET['id'] : '';

// Initialize an empty array for the admin data
$admin = array();

if (!empty($adminId)) {
    // Retrieve admin data from the database
    $sql = "SELECT * FROM ulaf.employee WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $adminId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();
    }

    // Close the statement
    $stmt->close();
}
?>