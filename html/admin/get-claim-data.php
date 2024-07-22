<?php
// Retrieve item ID from GET data
$claimId = isset($_GET['claim_id']) ? $_GET['claim_id'] : '';

// Initialize an empty array for the item data
$item = array();

if (!empty($claimId)) {
    // Retrieve item data from the database
    $sql = "SELECT * FROM ulaf.claims WHERE `Claim_ID` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $claimId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $item = $result->fetch_assoc();
    }

    // Close the statement
    $stmt->close();
}