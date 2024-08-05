<?php
require '../../vendor/autoload.php';
require 'dbconn.php'; // Include your database connection file


// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Update Redis for active users
    $redis = new Predis\Client();
    $lastActivityKey = 'user:' . $user_id . ':last_activity';

    // Check if the last activity timestamp exists
    if ($redis->exists($lastActivityKey)) {
        $lastActivity = $redis->get($lastActivityKey);

        // If the last activity was more than 10 minutes ago, log out the user
        if (time() - $lastActivity > 600) {
            logUserActivity($conn, $redis, $user_id, 'logout');
            session_unset();
            session_destroy();
            header("Location: sign-in.php");
            exit();
        }
    }

    // Update the last activity timestamp in Redis
    $redis->set($lastActivityKey, time());
    $redis->expire($lastActivityKey, 600); // 10 minutes expiration

    // Update last_activity in the database
    $sql = "UPDATE users SET last_activity = NOW() WHERE User_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_id);
    $stmt->execute();

    // Check if a login activity was logged within the last 10 minutes
    $stmt = $conn->prepare("SELECT timestamp FROM activity_log WHERE user_id = ? AND activity_type = 'login' ORDER BY timestamp DESC LIMIT 1");
    $stmt->bind_param("s", $user_id);
    $stmt->execute();
    $stmt->bind_result($lastLogin);
    $stmt->fetch();
    $stmt->close();

    if (!isset($lastLogin) || (time() - strtotime($lastLogin) > 600)) {
        // Log user login activity (if not already logged within the last 10 minutes)
        logUserActivity($conn, $redis, $user_id, 'login');
    }
} else {
    // Log user logout if session is destroyed
    if (isset($_SESSION['previous_user_id'])) {
        $user_id = $_SESSION['previous_user_id'];
        $redis = new Predis\Client();
        logUserActivity($conn, $redis, $user_id, 'logout');
    }
}

// Function to log user activities
function logUserActivity($conn, $redis, $userId, $activityType, $itemId = null, $claimId = null)
{
    $timestamp = time();
    $logEntry = json_encode([
        'user_id' => $userId,
        'activity_type' => $activityType,
        'timestamp' => $timestamp
    ]);

    // Log to Redis
    $redis->rpush("user:{$userId}:activities", $logEntry);

    // Log to database
    $stmt = $conn->prepare("INSERT INTO activity_log (user_id, activity_type, item_id, claim_id, timestamp) VALUES (?, ?, ?, ?, FROM_UNIXTIME(?))");
    $stmt->bind_param("sssii", $userId, $activityType, $itemId, $claimId, $timestamp);
    $stmt->execute();
    $stmt->close();
}

// Ensure to log logout activity when the session is destroyed
function logLogoutActivityOnSessionDestroy()
{
    session_start();
    if (isset($_SESSION['user_id'])) {
        $_SESSION['previous_user_id'] = $_SESSION['user_id'];
    }
    session_write_close();
}

register_shutdown_function('logLogoutActivityOnSessionDestroy');
