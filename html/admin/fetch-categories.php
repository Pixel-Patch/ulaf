<?php
// fetch-userids.php

// Include your database connection script
require 'dbconn.php';

// Query to fetch User_ID from users table
$sql = "SELECT Category_ID, Category_Name FROM categories WHERE 1";
$result = $conn->query($sql);

$categories = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = array(
            'Category_ID' => $row['Category_ID'],
            'Category_Name' => $row['Category_Name']
        );
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($categories);
?>