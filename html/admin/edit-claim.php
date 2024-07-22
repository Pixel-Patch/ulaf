<?php
// Include your database connection file
include('dbconn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $claimID = htmlspecialchars($_POST['claimID'], ENT_QUOTES, 'UTF-8');
    $claimStatus = htmlspecialchars($_POST['claimStatus'], ENT_QUOTES, 'UTF-8');
    $verificationStatus = htmlspecialchars($_POST['verificationStatus'], ENT_QUOTES, 'UTF-8');
    $itemRemarks = htmlspecialchars($_POST['itemRemarks'], ENT_QUOTES, 'UTF-8');
    $claimAgain = htmlspecialchars($_POST['claimAgain'], ENT_QUOTES, 'UTF-8') === 'NULL' ? NULL : htmlspecialchars($_POST['claimAgain'], ENT_QUOTES, 'UTF-8');
    $proof = htmlspecialchars($_POST['proof'], ENT_QUOTES, 'UTF-8');

    // Retrieve the existing proof and returned image names from the database
    $sql = "SELECT `Proof_Image`, `Returned_Image`, `Claimer_ID` FROM `claims` WHERE `Claim_ID` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $claimID);
    $stmt->execute();
    $stmt->bind_result($existingProofImage, $existingReturnedImage, $claimerID);
    $stmt->fetch();
    $stmt->close();

    // File upload directories
    $imageDirProof = '../../assets/uploads/proofs/';
    $imageDirReturned = '../../assets/uploads/returned-proof/';

    // Initialize arrays to store uploaded image paths
    $proofImagePaths = $existingProofImage ? explode(',', $existingProofImage) : [];
    $returnedImagePaths = $existingReturnedImage ? explode(',', $existingReturnedImage) : [];

    // Handle Proof Image upload
    if (!empty($_FILES['proofImage']['name'][0])) {
        // Delete existing proof images
        foreach ($proofImagePaths as $existingImage) {
            $existingImagePath = $imageDirProof . $existingImage;
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        }
        $proofImagePaths = []; // Reset the array

        foreach ($_FILES['proofImage']['tmp_name'] as $key => $tmp_name) {
            $file_name = basename($_FILES['proofImage']['name'][$key]);
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $new_file_name = $claimID . '-' . $claimerID . '-' . $key . '.' . $file_extension;
            $targetFilePath = $imageDirProof . $new_file_name;
            if (move_uploaded_file($tmp_name, $targetFilePath)) {
                $proofImagePaths[] = $new_file_name;
            }
        }
    }

    // Handle Returned Image upload
    if (!empty($_FILES['returnedImage']['name'][0])) {
        // Delete existing returned images
        foreach ($returnedImagePaths as $existingImage) {
            $existingImagePath = $imageDirReturned . $existingImage;
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        }
        $returnedImagePaths = []; // Reset the array

        foreach ($_FILES['returnedImage']['tmp_name'] as $key => $tmp_name) {
            $file_name = basename($_FILES['returnedImage']['name'][$key]);
            $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
            $new_file_name = $claimID . '-' . $claimerID . '-' . $key . '.' . $file_extension;
            $targetFilePath = $imageDirReturned . $new_file_name;
            if (move_uploaded_file($tmp_name, $targetFilePath)) {
                $returnedImagePaths[] = $new_file_name;
            }
        }
    }

    // Convert image paths arrays to comma-separated strings
    $proofImage = implode(',', $proofImagePaths);
    $returnedImage = implode(',', $returnedImagePaths);

    // Prepare SQL query to update the database
    $sql = "UPDATE `claims` SET
                `Claim_Status` = ?,
                `Verification_Status` = ?,
                `Remarks` = ?,
                `Claim_Again` = ?,
                `Proof` = ?,
                `Proof_Image` = ?,
                `Returned_Image` = ?
            WHERE `Claim_ID` = ?";

    // Prepare statement
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters
        $stmt->bind_param(
            'ssssssss',
            $claimStatus,
            $verificationStatus,
            $itemRemarks,
            $claimAgain,
            $proof,
            $proofImage,
            $returnedImage,
            $claimID
        );

        // Execute statement
        if ($stmt->execute()) {
            // Redirect on success
            header("Location: form-edit-claim.php?claim_id=$claimID");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close statement
        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
