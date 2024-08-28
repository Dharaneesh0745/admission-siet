<?php
// Include the database connection
include '../config.php';

// Check if document type is set
if (isset($_POST['documentType'])) {
    $documentType = $_POST['documentType'];

    // Validate document type
    $allowedColumns = [
        'CommunityDocument', 'AadhaarDocument', 'FirstGraduateDocument', 'MigrationDocument',
        'IncomeDocument', 'CounsellingDocument', 'DiplomaDocument', 'UGDocument',
        'TotalMark10Document', 'TotalMark12Document', 'TransferCertificate'
    ];

    if (in_array($documentType, $allowedColumns)) {
        // Fetch documents
        $query = "SELECT StudentMobileNo, $documentType FROM umis WHERE $documentType IS NOT NULL";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            echo '<h1>Documents of Type: ' . htmlspecialchars($documentType) . '</h1>';
            echo '<table border="1">';
            echo '<tr><th>Name</th><th>Action</th></tr>';

            while ($row = mysqli_fetch_assoc($result)) {
                $StudentMobileNo = htmlspecialchars($row['StudentMobileNo']);
                $pdfData = $row[$documentType];

                // Generate a unique identifier for viewing
                $viewUrl = "view_pdf.php?StudentMobileNo=$StudentMobileNo&documentType=$documentType";
                
                echo '<tr>';
                echo '<td>' . $StudentMobileNo . '</td>';
                echo '<td><a href="' . $viewUrl . '" target="_blank">View</a></td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No documents found for the selected type.';
        }
    } else {
        echo 'Invalid document type.';
    }
} else {
    echo 'No document type specified.';
}

// Close the database connection
mysqli_close($conn);
?>
