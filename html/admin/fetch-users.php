<?php
// Include the database connection file


// SQL query to fetch user data
$query = "SELECT User_ID, Username, User_Type, Email, Contact FROM ulaf.Users WHERE User_Type IN ('student', 'staff', 'faculty')";

// Execute the query
$result = $conn->query($query);

// Prepare the output data
$output = [
    "data" => []
];

// Populate the data array
while ($row = $result->fetch_assoc()) {
    $user = [
        $row['User_ID'],
        $row['Username'],
        $row['User_Type'],
        $row['Email'],
        $row['Contact']
    ];
    $output['data'][] = $user;
}

// Encode the output data in JSON
$jsonData = json_encode($output);

// Write the JSON data to a file (optional)
$file = '../../assets/json/user-list.json'; // Update this path with the correct relative path
if (file_put_contents($file, $jsonData)) {
    // Output the JSON data
    echo $jsonData;
} else {
    // If writing to the file failed, output an error message in JSON
    $error = ['error' => "ERROR: Could not write data to $file"];
    echo json_encode($error);
}

// Close the database connection
