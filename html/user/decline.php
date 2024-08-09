<?php
session_start(); // Start the session to track user activity
require '../../vendor/autoload.php'; // Include this if using Composer for Predis
include 'dbconn.php';
require 'user-activity-log.php';

if (isset($_GET['claimId'])) {
	$claimId = intval($_GET['claimId']); // Ensure claimId is an integer
	$status = 'Declined';
	$verificationDate = new DateTime("now", new DateTimeZone('Asia/Manila'));
	$formattedDate = $verificationDate->format('Y-m-d H:i:s');

	// Fetch the Item_ID based on the Claim_ID
	$stmt = $conn->prepare("SELECT Item_ID FROM claims WHERE Claim_ID = ?");
	$stmt->bind_param("i", $claimId);
	$stmt->execute();
	$stmt->bind_result($itemId);
	$stmt->fetch();
	$stmt->close();

	if ($itemId) {
		$sql = "UPDATE claims SET
                Verification_Status = ?,
                Verification_Date = ?
            WHERE Claim_ID = ?";

		if ($stmt = $conn->prepare($sql)) {
			$stmt->bind_param('ssi', $status, $formattedDate, $claimId);
			if ($stmt->execute()) {
				// Log the decline activity
				$posterID = $_SESSION['user_id']; // Assuming user_id is stored in session
				$redis = new Predis\Client();
				$logDescription = "Claim ID #'{$claimId}' has been declined.";
				logUserActivity($conn, $redis, $posterID, 'decline_claim', $itemId, $claimId, null, $logDescription);

				// Display success modal and redirect
				echo "<script>showSuccessModal('Claim declined successfully.');</script>";
				echo "<script>setTimeout(() => {
                            window.location.href = 'view-verify-claims.php?claim_id=$claimId';
                        }, 2000);</script>";
			} else {
				echo "<script>showErrorModal('Error executing query: " . $stmt->error . "');</script>";
			}
			$stmt->close();
		} else {
			echo "<script>showErrorModal('Error preparing statement: " . $conn->error . "');</script>";
		}
	} else {
		echo "<script>showErrorModal('Error fetching Item ID for the claim.');</script>";
	}
} else {
	echo "<script>showWarningModal('No claim ID provided.');</script>";
}

$conn->close();
