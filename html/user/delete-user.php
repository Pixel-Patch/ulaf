<?php
// Include the database connection file
include('dbconn.php');

if (isset($_POST['user_id'])) {
	$user_id = $_POST['user_id'];

	// SQL query to delete user
	$sql = "DELETE FROM users WHERE User_ID = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param('s', $user_id);

	if ($stmt->execute()) {
		echo 'success';
	} else {
		echo 'error';
	}

	$stmt->close();
	$conn->close();
}
