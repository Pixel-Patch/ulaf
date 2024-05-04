<?php
// Include the database connection file
// Ensure dbconn.php handles database connection setup and error handling

// SQL query to fetch user data
$query = "SELECT User_ID, Username, User_Type, Email, Contact FROM ulaf.Users WHERE User_Type IN ('student', 'staff', 'faculty')";

// Execute the query
$result = $conn->query($query);

$users = [];
if ($result) {
    // Check if any rows were returned
    if ($result->num_rows > 0) {
        // Fetch each row and add to the users array
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
        echo "Users array populated successfully.<br>";
    } else {
        // No results found, output an empty array
        $users = [];
        echo "No results found.<br>";
    }
} else {
    // If the query failed, output an error message in JSON
    $users = ['error' => "ERROR: Could not execute $query. " . $conn->error];
    echo "Query execution failed.<br>";
}

// Encode the users array in JSON
$jsonData = json_encode($users);

// Write the JSON data to a file
$file = '../../assets/json/user-list.json';;
if (file_put_contents($file, $jsonData)) {
    // Output the JSON data
    echo "JSON data written to file successfully.<br>";
    echo $jsonData;
} else {
    // If writing to the file failed, output an error message in JSON
    $error = ['error' => "ERROR: Could not write data to $file"];
    echo "Failed to write JSON data to file.<br>";
    echo json_encode($error);
}

// Close the database connection
