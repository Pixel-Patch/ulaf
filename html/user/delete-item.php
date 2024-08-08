<?php
session_start(); // Assuming you have sessions to track user activity
require '../../vendor/autoload.php'; // Include this if using Composer for Predis
include 'dbconn.php';
require 'user-activity-log.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Get the itemId from the POST request
	$itemId = intval($_POST['itemId']);

	// Fetch the item name before deletion
	$stmt = $conn->prepare("SELECT Item_Name FROM items WHERE Item_ID = ?");
	$stmt->bind_param("i", $itemId);
	$stmt->execute();
	$result = $stmt->get_result();
	$item = $result->fetch_assoc();
	$stmt->close();

	if ($item) {
		$itemName = $item['Item_Name'];

		// Prepare the log description
		$logDescription = "Deleted item '{$itemName}' with Item ID #{$itemId}";

		// Log the delete activity before actual deletion
		$posterID = $_SESSION['user_id']; // Assuming user_id is stored in session
		$redis = new Predis\Client();
		logUserActivity($conn, $redis, $posterID, 'delete_item', $itemId, null, $itemName, $logDescription);

		// Prepare and execute the delete query
		$stmt = $conn->prepare("DELETE FROM items WHERE Item_ID = ?");
		$stmt->bind_param("i", $itemId);

		if ($stmt->execute()) {
			echo "success";
		} else {
			echo "error";
		}

		$stmt->close();
	} else {
		echo "error: item not found";
	}

	$conn->close();
}
