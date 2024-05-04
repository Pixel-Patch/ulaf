


<?php
// Connect to database
include 'dbconn.php'; // Adjust this line to your DB connection setup

// Initialize an array to store the results
$results = [];

// Check if the UserID exists
if (isset($_POST['formValidationUserID'])) {
    $userID = $_POST['formValidationUserID'];
    $query = mysqli_query($conn, "SELECT COUNT(*) FROM ulaf.users WHERE user_id = '$userID'");
    $count = mysqli_fetch_array($query)[0];

    if ($count > 0) {
        $results['userID'] = 'false'; // UserID exists
    } else {
        $results['userID'] = 'true'; // UserID does not exist, validation passes
    }
}

// Check if the username exists
if (isset($_POST['formValidationUsername'])) {
    $username = $_POST['formValidationUsername'];
    $query = mysqli_query($conn, "SELECT COUNT(*) FROM ulaf.users WHERE username = '$username'");
    $count = mysqli_fetch_array($query)[0];

    if ($count > 0) {
        $results['username'] = 'false'; // Username exists
    } else {
        $results['username'] = 'true'; // Username does not exist, validation passes
    }
}

// Check if the email exists
if (isset($_POST['formValidationEmail'])) {
    $email = $_POST['formValidationEmail'];
    $query = mysqli_query($conn, "SELECT COUNT(*) FROM ulaf.users WHERE email = '$email'");
    $count = mysqli_fetch_array($query)[0];

    if ($count > 0) {
        $results['email'] = 'false'; // Email exists
    } else {
        $results['email'] = 'true'; // Email does not exist, validation passes
    }
}

// Check if the new UserID exists
if (isset($_POST['newFormValidationUserID'])) {
    $newUserID = $_POST['newFormValidationUserID'];
    $oldUserID = $_POST['oldFormValidationUserID'];
    $query = mysqli_query($conn, "SELECT COUNT(*) FROM ulaf.users WHERE user_id = '$newUserID' AND user_id != '$oldUserID'");
    $count = mysqli_fetch_array($query)[0];

    if ($count > 0) {
        $results['newUserID'] = 'false'; // New UserID exists
    } else {
        $results['newUserID'] = 'true'; // New UserID does not exist, validation passes
    }
}

// Check if the new username exists
if (isset($_POST['newFormValidationUsername'])) {
    $newUsername = $_POST['newFormValidationUsername'];
    $oldUsername = $_POST['oldFormValidationUsername'];
    $query = mysqli_query($conn, "SELECT COUNT(*) FROM ulaf.users WHERE username = '$newUsername' AND username != '$oldUsername'");
    $count = mysqli_fetch_array($query)[0];

    if ($count > 0) {
        $results['newUsername'] = 'false'; // New username exists
    } else {
        $results['newUsername'] = 'true'; // New username does not exist, validation passes
    }
}

// Check if the new email exists
if (isset($_POST['newFormValidationEmail'])) {
    $newEmail = $_POST['newFormValidationEmail'];
    $oldEmail = $_POST['oldFormValidationEmail'];
    $query = mysqli_query($conn, "SELECT COUNT(*) FROM ulaf.users WHERE email = '$newEmail' AND email != '$oldEmail'");
    $count = mysqli_fetch_array($query)[0];

    if ($count > 0) {
        $results['newEmail'] = 'false'; // New email exists
    } else {
        $results['newEmail'] = 'true'; // New email does not exist, validation passes
    }
}

// Return the results as a JSON object
echo json_encode($results);
