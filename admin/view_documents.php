<?php
@include '../config.php';

$studentMobileNo = isset($_GET['StudentMobileNo']) ? $_GET['StudentMobileNo'] : '';
$document = isset($_GET['document']) ? $_GET['document'] : '';

// Validate and sanitize inputs
$allowedDocuments = [
    'ProfilePhoto',
    'CommunityDocument',
    'AadhaarDocument',
    'FirstGraduateDocument',
    'MigrationDocument',
    'IncomeDocument',
    'CounsellingDocument',
    'DiplomaDocument',
    'UGDocument',
    'TotalMark10Document',
    'TotalMark12Document',
    'TransferCertificate'
];

if (!in_array($document, $allowedDocuments)) {
    die('Invalid document type.');
}

// Fetch the document BLOB
$sql = "SELECT $document FROM umis WHERE StudentMobileNo = '" . $conn->real_escape_string($studentMobileNo) . "'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $blobData = $row[$document];

    if ($blobData) {
        // Output the BLOB data as a PDF
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $document . '.pdf"');
        echo $blobData;
    } else {
        die('No document data available.');
    }
} else {
    die('No document found for the given student.');
}
exit();
?>
