<?php
// Database credentials
include 'dbconn.php';

// Establish a connection to the database
function getDB()
{
    global $host, $dbname, $username, $password;
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        return $pdo;
    } catch (PDOException $e) {
        // Log error or handle it according to your needs
        error_log('Connection error: ' . $e->getMessage());
        return null;
    }
}

// Check if the email is provided in the POST request
if (!isset($_POST['email']) || empty(trim($_POST['email']))) {
    echo 'invalid_input'; // Not a valid input
    exit;
}

$email = trim($_POST['email']);
$pdo = getDB();

if (!$pdo) {
    echo 'service_unavailable'; // Could not connect to the database
    exit;
}

// Prepare and execute the query
$stmt = $pdo->prepare("SELECT COUNT(*) FROM ulaf.users WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();
$exists = $stmt->fetchColumn() > 0;

// Return true if the email does not exist, false otherwise
echo $exists ? 'false' : 'true';
