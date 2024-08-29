<?php
@include '../config.php';

// Get student mobile number and selected documents
$studentMobileNo = isset($_POST['StudentMobileNo']) ? $_POST['StudentMobileNo'] : '';
$documentTypes = isset($_POST['documentType']) ? $_POST['documentType'] : [];

// Validate the input
if (empty($studentMobileNo) || empty($documentTypes)) {
    die('No student mobile number or documents selected.');
}

// Allowed document types (excluding ProfilePhoto)
$allowedDocuments = [
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

foreach ($documentTypes as $document) {
    if (!in_array($document, $allowedDocuments)) {
        die('Invalid document type selected.');
    }
}

// Prepare a zip file to download
$zip = new ZipArchive();
$zipFilename = 'documents_' . $studentMobileNo . '.zip';

if ($zip->open($zipFilename, ZipArchive::CREATE) !== TRUE) {
    die('Unable to create zip file.');
}

foreach ($documentTypes as $document) {
    // Fetch the document data
    $sql = "SELECT $document FROM umis WHERE StudentMobileNo = '" . $conn->real_escape_string($studentMobileNo) . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $documentData = $row[$document];

        if ($documentData) {
            // Add the document to the zip file
            $zip->addFromString($document . '.pdf', $documentData); // Adjust extension if needed
        }
    }
}

$zip->close();

// Serve the zip file for download
header('Content-Type: application/zip');
header('Content-Disposition: attachment; filename="' . basename($zipFilename) . '"');
header('Content-Length: ' . filesize($zipFilename));

readfile($zipFilename);

// Clean up the zip file after download
unlink($zipFilename);
exit();
?>
