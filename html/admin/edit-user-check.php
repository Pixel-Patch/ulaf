<?php
// Connect to database
include 'dbconn.php'; // Adjust this line to your DB connection setup

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize the result variable
$result = ['valid' => true];

// Check if the request method is GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get the field, value, and current value from the AJAX request
    $field = filter_input(INPUT_GET, 'field', FILTER_SANITIZE_STRING);
    $value = filter_input(INPUT_GET, 'value', FILTER_SANITIZE_STRING);
    $currentValue = filter_input(INPUT_GET, 'currentValue', FILTER_SANITIZE_STRING);

    // Log the values of the $field, $value, and $currentValue variables
    error_log("Field: {$field}");
    error_log("Value: {$value}");
    error_log("Current Value: {$currentValue}");

    // Validate the field
    switch ($field) {
        case 'edituserid':
        case 'editusername':
        case 'editemail':
            // Trim the value to remove any leading or trailing whitespace
            $value = trim($value);

            // Prepare the SQL statement based on the field
            switch ($field) {
                case 'edituserid':
                    $sql = "SELECT COUNT(*) FROM ulaf.users WHERE User_ID = ? AND User_ID != ?";
                    break;
                case 'editusername':
                    $sql = "SELECT COUNT(*) FROM ulaf.employee WHERE BINARY username = ? AND username != ? 
                            UNION 
                            SELECT COUNT(*) FROM ulaf.users WHERE BINARY Username = ? AND Username != ?";
                    break;
                case 'editemail':
                    $sql = "SELECT COUNT(*) FROM ulaf.employee WHERE LOWER(email) = LOWER(?) AND email != ? 
                            UNION 
                            SELECT COUNT(*) FROM ulaf.users WHERE LOWER(Email) = LOWER(?) AND Email != ?";
                    break;
            }

            // Prepare the statement
            $stmt = mysqli_prepare($conn, $sql);

            // Check if the statement is prepared successfully
            if ($stmt) {
                if ($field == 'edituserid') {
                    // Bind the parameters for edituserid
                    mysqli_stmt_bind_param($stmt, "ss", $value, $currentValue);
                } else {
                    // Bind the parameters for editusername and editemail
                    mysqli_stmt_bind_param($stmt, "ssss", $value, $currentValue, $value, $currentValue);
                }

                // Execute the statement and fetch the result
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_bind_result($stmt, $count);
                    $total_count = 0;
                    while (mysqli_stmt_fetch($stmt)) {
                        $total_count += $count;
                    }

                    if ($total_count > 0) {
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
            break;

        default:
            // Invalid field, return a more specific error message
            $result = ['valid' => false, 'message' => "Invalid field: {$field}"];
            break;
    }
}

// Log the result variable
error_log("Result: " . json_encode($result));

// Return the result as a JSON object
header('Content-Type: application/json');
echo json_encode($result);
?>
