<?php
header('Content-Type: application/json');

require('dbconn.php'); // Include your database connection file
require '../../vendor/autoload.php'; // Ensure Predis is loaded
session_start();

$response = [
	'status' => 'error',
	'alertClass' => 'alert-danger',
	'alertTitle' => 'Error!',
	'message' => 'An unknown error occurred.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$usernameEmail = $_POST['usernameEmail'] ?? '';
	$password = $_POST['password'] ?? '';

	if (empty($usernameEmail) || empty($password)) {
		$response['alertClass'] = 'alert-warning';
		$response['alertTitle'] = 'Warning!';
		$response['message'] = 'Please fill in all fields.';
		echo json_encode($response);
		exit;
	}

	try {
		$stmt = $conn->prepare('SELECT User_ID, Username, Password FROM users WHERE Username = ? OR Email = ?');
		if ($stmt === false) {
			throw new Exception('Prepare statement failed: ' . htmlspecialchars($conn->error));
		}

		$stmt->bind_param('ss', $usernameEmail, $usernameEmail);
		$stmt->execute();
		$stmt->store_result();

		if ($stmt->num_rows > 0) {
			$stmt->bind_result($user_id, $username, $hashed_password);
			$stmt->fetch();

			if (password_verify($password, $hashed_password)) {
				$_SESSION['user_id'] = $user_id;
				$_SESSION['username'] = $username;

				$response['status'] = 'success';
				$response['alertClass'] = 'alert-primary';
				$response['alertTitle'] = 'Success!';
				$response['message'] = 'Login successful! Redirecting...';

				// Log the login activity with description
				$redis = new Predis\Client();
				logUserActivity($conn, $redis, $user_id, 'login', 'User logged in');
			} else {
				$response['message'] = 'Invalid username/email or password.';
			}
		} else {
			$response['message'] = 'Invalid username/email or password.';
		}

		$stmt->close();
	} catch (Exception $e) {
		$response['message'] = 'Database error: ' . $e->getMessage();
	}
} else {
	$response['message'] = 'Invalid request method.';
}

$conn->close();
echo json_encode($response);

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
