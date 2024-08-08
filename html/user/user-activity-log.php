<?php
function logUserActivity($conn, $redis, $userId, $activityType, $itemId = null, $claimId = null, $itemName = null, $description = null)
{
	$timestamp = time();
	$activityDescriptions = [
		'add_claim' => "Claim for item #'{$itemId}' has been submitted.",
		'add_item' => "Item '{$itemName}' has been added.",
		'register' => "User '{$userId}' has registered.",
		'cregister' => "User '{$userId}' has completed the registration.",
		'return_item' => "Item ID '{$itemId}' has been returned with claim ID '{$claimId}'.",
		'edit_item' => $description,
		'edit_profile' => $description,
		'delete_item' => $description,
		'delete_claim' => $description,// This directly uses the description passed from edit_item.php
		// Add more activity types and descriptions as needed
	];

	// The final description is directly used from the $description parameter for 'edit_item'
	$description = $activityDescriptions[$activityType];

	$logEntry = json_encode([
		'user_id' => $userId,
		'activity_type' => $activityType,
		'item_id' => $itemId,
		'claim_id' => $claimId,
		'description' => $description, // This is where $logDescription gets stored
		'timestamp' => $timestamp
	]);

	// Log to Redis
	try {
		$redis->rpush("user:{$userId}:activities", $logEntry);
	} catch (Exception $e) {
		error_log("Redis logging failed: " . $e->getMessage());
	}

	// Log to database
	try {
		$stmt = $conn->prepare("INSERT INTO activity_log (user_id, activity_type, item_id, claim_id, description, timestamp) VALUES (?, ?, ?, ?, ?, FROM_UNIXTIME(?))");
		$stmt->bind_param("sssssi", $userId, $activityType, $itemId, $claimId, $description, $timestamp);
		$stmt->execute();
		$stmt->close();
	} catch (Exception $e) {
		error_log("Database logging failed: " . $e->getMessage());
	}
}
