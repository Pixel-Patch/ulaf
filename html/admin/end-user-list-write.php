<?php
header('Content-Type: application/json');

// Get user_id from GET parameters
$user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';

$jsonFilePath = '../../assets/json/item-list.json';

// Check if the JSON file exists
if (!file_exists($jsonFilePath)) {
  echo json_encode(['data' => []]);
  exit;
}

// Read the JSON file
$jsonData = file_get_contents($jsonFilePath);
$data = json_decode($jsonData, true);

// Filter data by Poster_ID
$filteredData = array_filter($data['data'], function ($item) use ($user_id) {
  return $item['Poster_ID'] == $user_id;
});

// Return the filtered data as JSON
echo json_encode(['data' => array_values($filteredData)]);
