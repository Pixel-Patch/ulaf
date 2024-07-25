<?php
require_once 'dbconn.php';

$imageDir = '../../assets/uploads/items/';
$errors = []; // Initialize errors array

function uploadImages($images, $itemCategory, $posterID, $imageDir)
{
    $imageNames = [];
    $errors = [];
    if (!empty($images['name'][0])) {
        $imageCount = count($images['name']);
        if ($imageCount > 3) {
            return ['errors' => ['You can upload a maximum of 3 images']];
        }

        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        foreach ($images['tmp_name'] as $key => $tmp_name) {
            $fileName = $images['name'][$key];
            $fileTmpName = $images['tmp_name'][$key];
            $fileSize = $images['size'][$key];
            $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            if (in_array($fileExtension, $allowedExtensions)) {
                $newFileName = $itemCategory . '-' . $posterID . '-' . time() . '-' . $key . '.' . $fileExtension;
                $targetFilePath = $imageDir . $newFileName;
                if (move_uploaded_file($fileTmpName, $targetFilePath)) {
                    $imageNames[] = $newFileName;
                } else {
                    $errors[] = 'Error uploading file: ' . $fileName;
                }
            } else {
                $errors[] = 'Invalid file type for file: ' . $fileName . '. Allowed types: jpg, jpeg, png, gif.';
            }
        }
    }
    return ['errors' => $errors, 'imageNames' => $imageNames];
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $itemId = isset($_POST['itemId']) ? htmlspecialchars($_POST['itemId'], ENT_QUOTES, 'UTF-8') : '';

    // Initialize an array to store update fields
    $updateFields = [];

    // Update item type
    if (isset($_POST['itemType'])) {
        $itemType = htmlspecialchars($_POST['itemType'], ENT_QUOTES, 'UTF-8');
        $updateFields[] = "Type = '$itemType'";
    }

    // Update poster ID
    if (isset($_POST['adduserid'])) {
        $posterID = htmlspecialchars($_POST['adduserid'], ENT_QUOTES, 'UTF-8');
        $updateFields[] = "Poster_ID = '$posterID'";
    }

    // Update item name
    if (isset($_POST['itemName'])) {
        $itemName = htmlspecialchars($_POST['itemName'], ENT_QUOTES, 'UTF-8');
        $updateFields[] = "Item_Name = '$itemName'";
    }

    // Update item category
    if (isset($_POST['itemCategory'])) {
        $itemCategory = htmlspecialchars($_POST['itemCategory'], ENT_QUOTES, 'UTF-8');
        $updateFields[] = "Category_ID = '$itemCategory'";
    }

    // Update current location if provided
    if (isset($_POST['itemCurrentLocation'])) {
        $itemCurrentLocation = htmlspecialchars($_POST['itemCurrentLocation'], ENT_QUOTES, 'UTF-8');
        $updateFields[] = "Current_Location = '$itemCurrentLocation'";
    }

    // Update item status
    if (isset($_POST['itemStatus'])) {
        $itemStatus = htmlspecialchars($_POST['itemStatus'], ENT_QUOTES, 'UTF-8');
        $updateFields[] = "Item_Status = '$itemStatus'";
    }

    // Update pin location
    if (isset($_POST['addpinlocation'])) {
        $pinLocation = htmlspecialchars($_POST['addpinlocation'], ENT_QUOTES, 'UTF-8');
        $latitude = htmlspecialchars($_POST['latitude'], ENT_QUOTES, 'UTF-8');
        $longitude = htmlspecialchars($_POST['longitude'], ENT_QUOTES, 'UTF-8');
        $updateFields[] = "Pin_Location = '$pinLocation', Latitude = '$latitude', Longitude = '$longitude'";
    }

    // Update item description
    if (isset($_POST['itemDescription'])) {
        $itemDescription = htmlspecialchars($_POST['itemDescription'], ENT_QUOTES, 'UTF-8');
        $updateFields[] = "Description = '$itemDescription'";
    }

    // Handle image uploads if provided
    if (!empty($_FILES['itemImages']['name'][0])) {
        $result = uploadImages($_FILES['itemImages'], $itemCategory, $posterID, $imageDir);
        if (!empty($result['errors'])) {
            $errors = array_merge($errors, $result['errors']);
        } else {
            $uploadedImages = implode(',', $result['imageNames']);
            $updateFields[] = "Image = '$uploadedImages'";
        }
    }

    // If there are no errors, proceed with updating the database
    if (empty($errors)) {
        if (!empty($updateFields)) {
            $updateQuery = "UPDATE ulaf.items SET " . implode(', ', $updateFields) . " WHERE Item_ID = ?";
            if ($stmt = $conn->prepare($updateQuery)) {
                $stmt->bind_param("s", $itemId);
                $stmt->execute();

                // Check if any rows were affected
                if ($stmt->affected_rows > 0) {
                    $stmt->close();
                    // Redirect back to the edit form or another page after updating
                    header("Location: item-list.php");
                    exit();
                } else {
                    $errors[] = 'No changes were made.';
                }
                $stmt->close();
            } else {
                $errors[] = 'Database error: ' . $conn->error;
            }
        } else {
            $errors[] = 'No changes detected.';
        }
    }
}

// Handle errors by displaying them to the user
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo '<p>' . $error . '</p>';
    }
}
