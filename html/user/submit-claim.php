<?php

session_start();
require '../../vendor/autoload.php';
require('dbconn.php');
require('user-activity-log.php');

$response = array('success' => false, 'message' => '', 'claimId' => null);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $itemId = filter_var($_POST['item_id'] ?? null, FILTER_VALIDATE_INT);
    $userId = $_SESSION['user_id'] ?? null;
    $distinguishableMarks = htmlspecialchars($_POST['distinguishableMarks'] ?? '', ENT_QUOTES, 'UTF-8');
    $proofImages = $_FILES['proofImages'] ?? [];

    if (!$itemId || empty($distinguishableMarks) || empty($userId)) {
        $response['message'] = 'All fields are required.';
    } else {
        $claimQuery = "
            SELECT * 
            FROM claims 
            WHERE Item_ID = ? AND Claimer_ID = ? AND Verification_Status = 'Pending'
            LIMIT 1";

        $stmt = $conn->prepare($claimQuery);
        if (!$stmt) {
            $response['message'] = 'Failed to prepare statement: ' . $conn->error;
        } else {
            $stmt->bind_param("is", $itemId, $userId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $response['message'] = 'You have already submitted a pending claim for this item.';
            } else {
                $targetDir = "../../assets/uploads/proofs/";
                if (!file_exists($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }

                $uploadedFiles = [];
                foreach ($proofImages['name'] as $key => $filename) {
                    $extension = pathinfo($filename, PATHINFO_EXTENSION);
                    $newFilename = $itemId . '-' . $userId . '-' . ($key + 1) . '.' . $extension;
                    $targetFilePath = $targetDir . $newFilename;
                    if (move_uploaded_file($proofImages['tmp_name'][$key], $targetFilePath)) {
                        $uploadedFiles[] = $newFilename;
                    } else {
                        $response['message'] = 'Failed to move uploaded file.';
                        foreach ($uploadedFiles as $file) {
                            unlink($targetDir . $file);
                        }
                        break;
                    }
                }

                if (empty($response['message'])) {
                    $insertClaimQuery = "
                        INSERT INTO claims (Item_ID, Claimer_ID, Claim_Status, Proof, Proof_Image, Claim_Date, Verification_Status) 
                        VALUES (?, ?, 'Claiming', ?, ?, NOW(), 'Pending')";

                    $stmt = $conn->prepare($insertClaimQuery);
                    if (!$stmt) {
                        $response['message'] = 'Failed to prepare statement: ' . $conn->error;
                    } else {
                        $proofImagesStr = implode(',', $uploadedFiles);
                        $stmt->bind_param("isss", $itemId, $userId, $distinguishableMarks, $proofImagesStr);

                        if ($stmt->execute()) {
                            $response['success'] = true;
                            $response['message'] = 'Claim submitted successfully. Please wait for the item founder to verify your claim.';
                            $response['claimId'] = $stmt->insert_id;

                            $redis = new Predis\Client();
                            logUserActivity($conn, $redis, $userId, 'add_claim', $itemId, $response['claimId']);
                        } else {
                            $response['message'] = 'An error occurred while submitting your claim. Please try again later.';
                        }
                    }
                }
            }
        }
    }
} else {
    $response['message'] = 'Invalid request method.';
}

header('Content-Type: application/json');
echo json_encode($response);
