<?php
// fetch-itemids.php

// Include your database connection script
require 'dbconn.php';

// Query to fetch Item_ID, Item_Name, and Type from items table
$sql = "SELECT `Item_ID`, `Item_Name`, `Type` FROM `items` WHERE `Type` IN ('lost', 'found')";
$result = $conn->query($sql);

$items = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $items[] = array(
            'Item_ID' => $row['Item_ID'],
            'Item_Name' => $row['Item_Name'],
            'Type' => $row['Type']
        );
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($items);
