<?php
require '../../vendor/autoload.php'; // Adjust this path if your vendor folder is not directly in the project root



if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Update Redis
    $redis = new Predis\Client();
    $redis->set('user:' . $user_id . ':last_activity', time());
    $redis->expire('user:' . $user_id . ':last_activity', 100); // 5 minutes expiration

    // Update last_activity in the database
    $sql = "UPDATE users SET last_activity = NOW() WHERE User_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $user_id);
    $stmt->execute();
}
