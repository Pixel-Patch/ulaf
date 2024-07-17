<?php
// Connect to database
include 'dbconn.php'; // Adjust this line to your DB connection setup

header('Content-Type: application/json');

// Initialize the result variable
$result = ['valid' => true];

if (!$conn) {
    echo json_encode(['valid' => false, 'message' => 'Database connection failed: ' . mysqli_connect_error()]);
    exit;
}

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
                    $sql = "SELECT COUNT(*) FROM ulaf.employee WHERE id_number = ? AND id_number != ?";
                    break;
                case 'editusername':
                    $sql = "SELECT COUNT(*) FROM ulaf.employee WHERE BINARY username = ? AND username != ?";
                    break;
                case 'editemail':
                    $sql = "SELECT COUNT(*) FROM ulaf.employee WHERE LOWER(email) = LOWER(?) AND email != ?";
                    break;
                default:
                    echo json_encode(['valid' => false, 'message' => "Invalid field: {$field}"]);
                    exit;
            }

            // Prepare the statement
            $stmt = mysqli_prepare($conn, $sql);

            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "ss", $value, $currentValue);

                // Execute the statement and fetch the result
                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_bind_result($stmt, $count);
                    mysqli_stmt_fetch($stmt);

                    // Log the count result
                    error_log("Count: {$count}");

                    if ($count > 0) {
                        $result = ['valid' => false, 'message' => 'Value already exists'];
                    } else {
                        $result = ['valid' => true];
                    }
                } else {
                    $result = ['valid' => false, 'message' => 'Execution error: ' . mysqli_error($conn)];
                }

                mysqli_stmt_close($stmt);
            } else {
                $result = ['valid' => false, 'message' => 'Preparation error: ' . mysqli_error($conn)];
            }
            break;

        default:
            $result = ['valid' => false, 'message' => "Invalid field: {$field}"];
            break;
    }
} else {
    $result = ['valid' => false, 'message' => 'Invalid request method'];
}

// Log the result variable
error_log("Result: " . json_encode($result));

// Return the result as a JSON object
echo json_encode($result);
