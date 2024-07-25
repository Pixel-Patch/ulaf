<?php
// Connect to database
include 'dbconn.php'; // Adjust this line to your DB connection setup

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize the result variable
$result = ['valid' => true];

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the field and value from the AJAX request
    $field = $_GET['field'];
    $value = $_GET['value'];

    // Prepare the SQL statement based on the field
    $stmt = null;
    switch ($field) {
        case 'adduserid':
            $stmt = mysqli_prepare($conn, "SELECT COUNT(*) FROM ulaf.employee WHERE id_number = ?");
            break;
        case 'addusername':
            $stmt = mysqli_prepare($conn, "SELECT COUNT(*) FROM ulaf.employee WHERE  BINARY username = ?");
            break;
        case 'addemail':
            // Trim the value to remove any leading or trailing whitespace
            $value = trim($value);
            $stmt = mysqli_prepare($conn, "SELECT COUNT(*) FROM ulaf.employee WHERE email = ?");
            break;
        default:
            // Invalid field, return false
            $result = ['valid' => false, 'message' => 'Invalid field'];
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
                $result = ['valid' => false, 'message' => 'Value already exists']; // Value exists
            } else {
                $result = ['valid' => true]; // Value does not exist, validation passes
            }
        } else {
            $result = ['valid' => false, 'message' => 'Execution error: ' . mysqli_error($conn)]; // Execution error
        }

        // Close the prepared statement
        mysqli_stmt_close($stmt);
    }
}

// Return the result as a JSON object
header('Content-Type: application/json');
echo json_encode($result);