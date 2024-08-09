<?php
// Connect to database
include 'dbconn.php'; // Adjust this line to your DB connection setup

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize the result variable
$result = 'true';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the field and value from the AJAX request
    $field = $_POST['field'];
    $value = $_POST['value'];

    // Prepare the SQL statement based on the field
    $stmt = null;
    switch ($field) {
        case 'adduserid':
            $stmt = mysqli_prepare($conn, "SELECT COUNT(*) FROM ulaf.users WHERE user_id = ?");
            break;
        case 'addusername':
            $stmt = mysqli_prepare($conn, "SELECT COUNT(*) FROM ulaf.employee WHERE BINARY username = ? AND username != ? 
                            UNION 
                            SELECT COUNT(*) FROM ulaf.users WHERE BINARY Username = ? AND Username != ?");
            break;
        case 'addemail':
            // Trim the value to remove any leading or trailing whitespace
            $value = trim($value);
            $stmt = mysqli_prepare($conn, "SELECT COUNT(*) FROM ulaf.employee WHERE LOWER(email) = LOWER(?) AND email != ? 
                            UNION 
                            SELECT COUNT(*) FROM ulaf.users WHERE LOWER(Email) = LOWER(?) AND Email != ?");
            break;
        default:
            // Invalid field, return false
            $result = 'false';
            break;
    }

    // Check if the statement is prepared successfully
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $value);

        // Execute the statement and fetch the result
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_bind_result($stmt, $count);
            mysqli_stmt_fetch($stmt);

            if ($count > 0) {
                $result = 'false'; // Value exists
            } else {
                $result = 'true'; // Value does not exist, validation passes
            }
        } else {
            $result = 'error'; // Execution error
            echo mysqli_error($conn);
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }
}

// Return the result as a plain text
echo $result;
