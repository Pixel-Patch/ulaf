<?php
session_start();

require '../../vendor/autoload.php';
require 'dbconn.php'; // Include your database connection file

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
	$user_id = $_SESSION['user_id'];

	// Log the logout activity with description
	$redis = new Predis\Client();
	logUserActivity($conn, $redis, $user_id, 'logout', 'User logged out');

	// Unset all session variables
	$_SESSION = array();

	// If it's desired to kill the session, also delete the session cookie
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(
			session_name(),
			'',
			time() - 42000,
			$params["path"],
			$params["domain"],
			$params["secure"],
			$params["httponly"]
		);
	}

	// Finally, destroy the session
	session_destroy();
}

// Redirect to the login page
header("Location: sign-in.php");
exit();

// Function to log user activities
function logUserActivity($conn, $redis, $userId, $activityType, $description, $itemId = null, $claimId = null)
{
	$timestamp = time();
	$logEntry = json_encode([
		'user_id' => $userId,
		'activity_type' => $activityType,
		'description' => $description,
		'timestamp' => $timestamp
	]);

	// Log to Redis
	$redis->rpush("user:{$userId}:activities", $logEntry);

	// Log to database
	$stmt = $conn->prepare("INSERT INTO activity_log (user_id, activity_type, description, item_id, claim_id, timestamp) VALUES (?, ?, ?, ?, ?, FROM_UNIXTIME(?))");
	$stmt->bind_param("ssssis", $userId, $activityType, $description, $itemId, $claimId, $timestamp);
	$stmt->execute();
	$stmt->close();
}
