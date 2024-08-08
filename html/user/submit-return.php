<?php
session_start();
require '../../vendor/autoload.php';
require 'dbconn.php';
require 'user-activity-log.php';

$response = array('success' => false, 'message' => '', 'item_id' => null);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $itemId = filter_var($_POST['item_id'] ?? null, FILTER_VALIDATE_INT);
    $claimerId = filter_var($_POST['claimer_id'] ?? null, FILTER_VALIDATE_INT);
    $claimId = filter_var($_POST['claim_id'] ?? null, FILTER_VALIDATE_INT);
    $remarks = htmlspecialchars($_POST['remarks'] ?? '', ENT_QUOTES, 'UTF-8');
    $returnedImages = $_FILES['returnedImage'] ?? [];

    if (!$itemId || !$claimerId || !$claimId || empty($remarks)) {
        $response['message'] = 'All fields are required.';
    } else {
        $uploadDirectory = '../../assets/uploads/returned-proof/';
        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }

        $uploadedFiles = [];
        foreach ($returnedImages['name'] as $key => $filename) {
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $newFilename = $claimId . '-' . $claimerId . '-' . ($key + 1) . '.' . $extension;
            $targetFilePath = $uploadDirectory . $newFilename;
            if (move_uploaded_file($returnedImages['tmp_name'][$key], $targetFilePath)) {
                $uploadedFiles[] = $newFilename;
            } else {
                $response['message'] = 'Failed to move uploaded file.';
                foreach ($uploadedFiles as $file) {
                    unlink($uploadDirectory . $file);
                }
                break;
            }
        }

        if (empty($response['message'])) {
            $returnedImagesJson = json_encode($uploadedFiles);
            $currentDate = date('Y-m-d H:i:s');

            $claimsQuery = "
                UPDATE claims 
                SET Returned_Image=?, Claim_Status='Returned', Verification_Date=?, Remarks=? 
                WHERE Claim_ID=?";
            $itemsQuery = "
                UPDATE items 
                SET Item_Status='Returned', Retrieved_Date=?, Retrieved_By=? 
                WHERE Item_ID=?";

            $stmtClaims = $conn->prepare($claimsQuery);
            $stmtItems = $conn->prepare($itemsQuery);

            if (!$stmtClaims || !$stmtItems) {
                $response['message'] = 'Failed to prepare statements: ' . $conn->error;
            } else {
                $stmtClaims->bind_param('sssi', $returnedImagesJson, $currentDate, $remarks, $claimId);
                $stmtItems->bind_param('sii', $currentDate, $claimerId, $itemId);

                if ($stmtClaims->execute() && $stmtItems->execute()) {
                    $response['success'] = true;
                    $response['message'] = 'Claim updated successfully!';
                    $response['item_id'] = $itemId;

                    $redis = new Predis\Client();
                    logUserActivity($conn, $redis, $claimerId, 'return_item', $itemId, $claimId);
                } else {
                    $response['message'] = 'An error occurred while updating the claim. Please try again later.';
                }
            }
        }
    }
} else {
    $response['message'] = 'Invalid request method.';
}

header('Content-Type: application/json');
echo json_encode($response);
