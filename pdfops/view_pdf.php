<?php
// Include the database connection
include '../config.php';

// Check if StudentMobileNo and documentType are set
if (isset($_GET['StudentMobileNo']) && isset($_GET['documentType'])) {
    $StudentMobileNo = $_GET['StudentMobileNo'];
    $documentType = $_GET['documentType'];

    // Validate document type
    $allowedColumns = [
        'CommunityDocument', 'AadhaarDocument', 'FirstGraduateDocument', 'MigrationDocument',
        'IncomeDocument', 'CounsellingDocument', 'DiplomaDocument', 'UGDocument',
        'TotalMark10Document', 'TotalMark12Document', 'TransferCertificate'
    ];

    if (in_array($documentType, $allowedColumns)) {
        // Fetch the document
        $query = "SELECT $documentType FROM umis WHERE StudentMobileNo = '$StudentMobileNo'";
        $result = mysqli_query($conn, $query);

        if ($result && $row = mysqli_fetch_assoc($result)) {
            $pdfData = $row[$documentType];
            $documentTypeHeader = "application/pdf";
            header("Content-Type: $documentTypeHeader");
            header("Content-Disposition: inline; filename=\"{$documentType}.pdf\"");
            echo $pdfData;
        } else {
            echo 'No document found.';
        }
    } else {
        echo 'Invalid document type.';
    }
} else {
    echo 'No StudentMobileNo or documentType specified.';
}

// Close the database connection
mysqli_close($conn);
?>
