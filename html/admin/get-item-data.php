<?php
require_once 'dbconn.php';

// Retrieve item ID from GET data
$itemId = isset($_GET['item_id']) ? $_GET['item_id'] : '';

// Initialize an empty array for the item data
$item = array();

if (!empty($itemId)) {
    // Retrieve item data from the database
    $sql = "SELECT * FROM ulaf.items WHERE `Item_ID` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $itemId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
    }

    // Close the statement
    $stmt->close();
}

// Fetch categories from the database
$categories = array();
$sql = "SELECT `Category_ID`, `Category_Name` FROM `categories`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $categories[] = $row;
    }
}
