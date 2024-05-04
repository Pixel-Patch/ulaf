<?php
// Function to change permissions recursively
function chmod_r($path, $mode)
{
    if (is_dir($path)) {
        $dp = opendir($path);
        while (($file = readdir($dp)) !== false) {
            if ($file != '.' && $file != '..') {
                chmod_r($path . '/' . $file, $mode);
            }
        }
        closedir($dp);
    }
    return chmod($path, $mode);
}

// Include the database connection file
require_once 'dbconn.php';

// SQL query to fetch user data
$query = "SELECT User_ID, Username, User_Type, Email, Contact FROM ulaf.Users WHERE User_Type IN ('student', 'staff', 'faculty')";

// Execute the query
$result = $conn->query($query);

// Check if the 'draw' parameter is set
$draw = isset($_REQUEST['draw']) ? intval($_REQUEST['draw']) : 1;

// Prepare the output data
$output = [
    "draw" => $draw, // Increment this value with each request
    "recordsTotal" => $result->num_rows,
    "recordsFiltered" => $result->num_rows,
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
// Temporarily change the directory path to the 'temp' folder
$file = '.../.../assets/json/user-list.json';
$directory = dirname($file);

// Change permissions recursively for the directory and its subdirectories
chmod_r($directory, 0755);

// Check if the directory exists and is writable, if not, display an error message
if (!file_exists($directory) || !is_writable($directory)) {
    $error = ['error' => "ERROR: Directory does not exist or is not writable: $directory"];
    echo json_encode($error);
    exit();
}

// Check if the file is writable, if not, display an error message
if (!is_writable($file)) {
    $error = ['error' => "ERROR: File is not writable: $file"];
    echo json_encode($error);
    exit();
}

if (file_put_contents($file, $jsonData)) {
    // Output the JSON data
    echo $jsonData;
} else {
    // If writing to the file failed, output an error message in JSON
    $error = ['error' => "ERROR: Could not write data to $file"];
    echo json_encode($error);
}

// Close the database connection
$conn->close();
