<?php
session_start(); // Assuming you have sessions to track user activity
require '../../vendor/autoload.php'; // Include this if using Composer for Predis
include 'dbconn.php';
require 'user-activity-log.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	// Get the claimId from the POST request
	$claimId = intval($_POST['claimId']);

	// Fetch the claim details before deletion
	$stmt = $conn->prepare("SELECT Item_ID FROM claims WHERE Claim_ID = ?");
	$stmt->bind_param("i", $claimId);
	$stmt->execute();
	$result = $stmt->get_result();
	$claim = $result->fetch_assoc();
	$stmt->close();

	if ($claim) {
		$itemId = $claim['Item_ID'];

		// Prepare the log description
		$logDescription = "Deleted claim with Claim ID #{$claimId} related to Item ID #{$itemId}";

		// Log the delete activity before actual deletion
		$userId = $_SESSION['user_id']; // Assuming user_id is stored in session
		$redis = new Predis\Client();
		logUserActivity($conn, $redis, $userId, 'delete_claim', $itemId, $claimId, null, $logDescription);

		// Prepare and execute the delete query
		$stmt = $conn->prepare("DELETE FROM claims WHERE Claim_ID = ?");
		$stmt->bind_param("i", $claimId);

		if ($stmt->execute()) {
			echo "success";
		} else {
			echo "error";
		}

		$stmt->close();
	} else {
		echo "error: claim not found";
	}

	$conn->close();
}
