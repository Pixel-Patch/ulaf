<?php
header('Content-Type: application/json');

require('dbconn.php');
require '../../vendor/autoload.php';
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
		// First, check in the employees table
		$stmt = $conn->prepare('SELECT id, username, password FROM employee WHERE username = ? OR email = ?');
		if ($stmt === false) {
			throw new Exception('Prepare statement failed: ' . htmlspecialchars($conn->error));
		}

		$stmt->bind_param('ss', $usernameEmail, $usernameEmail);
		$stmt->execute();
		$stmt->store_result();

		if ($stmt->num_rows > 0) {
			$stmt->bind_result($employee_id, $employee_username, $employee_hashed_password);
			$stmt->fetch();

			if (password_verify($password, $employee_hashed_password)) {
				$_SESSION['user_id'] = $employee_id;
				$_SESSION['username'] = $employee_username;
				$_SESSION['user_role'] = 'employee';

				$response['status'] = 'success';
				$response['alertClass'] = 'alert-primary';
				$response['alertTitle'] = 'Success!';
				$response['message'] = 'Login successful! Redirecting to admin page...';

				// Log the login activity
				$redis = new Predis\Client();
				logUserActivity($conn, $redis, $employee_id, 'login', 'Employee logged in');

				// Redirect to admin page
				$response['redirect'] = '../admin/index.php';
			} else {
				$response['message'] = 'Invalid username/email or password.';
			}
		} else {
			// If not found in employees, check in the users table
			$stmt->prepare('SELECT User_ID, Username, Password FROM users WHERE Username = ? OR Email = ?');
			if ($stmt === false) {
				throw new Exception('Prepare statement failed: ' . htmlspecialchars($conn->error));
			}

			$stmt->bind_param('ss', $usernameEmail, $usernameEmail);
			$stmt->execute();
			$stmt->store_result();

			if ($stmt->num_rows > 0) {
				$stmt->bind_result($user_id, $user_username, $user_hashed_password);
				$stmt->fetch();

				if (password_verify($password, $user_hashed_password)) {
					$_SESSION['user_id'] = $user_id;
					$_SESSION['username'] = $user_username;
					$_SESSION['user_role'] = 'user';

					$response['status'] = 'success';
					$response['alertClass'] = 'alert-primary';
					$response['alertTitle'] = 'Success!';
					$response['message'] = 'Login successful! Redirecting to user page...';

					// Log the login activity
					$redis = new Predis\Client();
					logUserActivity($conn, $redis, $user_id, 'login', 'User logged in');

					// Redirect to user page
					$response['redirect'] = 'index.php';
				} else {
					$response['message'] = 'Invalid username/email or password.';
				}
			} else {
				$response['message'] = 'Invalid username/email or password.';
			}
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
