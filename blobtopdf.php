<?php
include 'config.php';

$sql = "SELECT CommunityDocument FROM umis WHERE StudentMobileNo = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die('Prepare failed: ' . htmlspecialchars($conn->error));
}

$documentType = "application/pdf";

$StudentMobileNo = 9566744510;
$stmt->bind_param("i", $StudentMobileNo);

$stmt->execute();

$stmt->bind_result($CommunityDocument);
$stmt->fetch();

if ($CommunityDocument) {
    ob_clean();

    $dataLength = strlen($CommunityDocument);
    if ($dataLength > 0) {
        header("Content-Type: " . $documentType);
        header("Content-Disposition: inline; filename=\"AadhaarDocument.pdf\"");
        header("Content-Length: " . $dataLength);

        echo $CommunityDocument;
    } else {
        echo "The document is empty.";
    }
} else {
    echo "No document found for the given StudentMobileNo.";
}

$stmt->close();
$conn->close();
?>
