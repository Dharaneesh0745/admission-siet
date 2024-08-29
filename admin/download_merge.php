<?php
@include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['studentMobileNos'])) {
        die("No student mobile numbers selected.");
    }

    $studentMobileNos = $_POST['studentMobileNos'];

    // Create a new ZIP archive
    $zip = new ZipArchive();
    $zipFilename = 'merged_documents.zip';

    if ($zip->open($zipFilename, ZipArchive::CREATE) !== TRUE) {
        die("Unable to create ZIP file.");
    }

    foreach ($studentMobileNos as $mobileNo) {
        // Fetch student details
        $sql = "SELECT * FROM umis WHERE StudentMobileNo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $mobileNo);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($row = $result->fetch_assoc()) {
            $documents = [
                'ProfilePhoto' => $row['ProfilePhoto'],
                'CommunityDocument' => $row['CommunityDocument'],
                'AadhaarDocument' => $row['AadhaarDocument'],
                'FirstGraduateDocument' => $row['FirstGraduateDocument'],
                'MigrationDocument' => $row['MigrationDocument'],
                'IncomeDocument' => $row['IncomeDocument'],
                'CounsellingDocument' => $row['CounsellingDocument'],
                'DiplomaDocument' => $row['DiplomaDocument'],
                'UGDocument' => $row['UGDocument'],
                'TotalMark10Document' => $row['TotalMark10Document'],
                'TotalMark12Document' => $row['TotalMark12Document'],
                'TransferCertificate' => $row['TransferCertificate']
            ];

            foreach ($documents as $docName => $docBlob) {
                if (!empty($docBlob)) {
                    $zip->addFromString($mobileNo . '_' . $docName . '.pdf', $docBlob);
                }
            }
        }
    }

    $zip->close();

    // Serve the ZIP file
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . $zipFilename . '"');
    header('Content-Length: ' . filesize($zipFilename));
    readfile($zipFilename);

    // Clean up
    unlink($zipFilename);
    $conn->close();
} else {
    die("Invalid request.");
}
?>
