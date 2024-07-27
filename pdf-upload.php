<?php
@include 'config.php';

// Debugging output to confirm data receipt
error_log("POST data: " . print_r($_POST, true));
error_log("FILES data: " . print_r($_FILES, true));

if (isset($_FILES['file']) && isset($_POST['column']) && isset($_POST['MobileNumber'])) {
    $file = $_FILES['file'];
    $column = $_POST['column'];
    $MobileNumber = $_POST['MobileNumber'];

    // // Debugging logs
    // error_log("File data: " . print_r($file, true));
    // error_log("Column: " . $column);
    // error_log("MobileNumber: " . $MobileNumber);

    if ($file['tmp_name'] != '') {
        $pdfdata = addslashes(file_get_contents($file['tmp_name']));
        $allowedColumns = ['CommunityDocument', 'AadhaarDocument', 'FirstGraduateDocument', 'MigrationDocument', 'IncomeDocument', 'CounsellingDocument', 'DiplomaDocument', 'TotalMark10Document', 'TotalMark12Document', 'TransferCertificate'];

        if (in_array($column, $allowedColumns)) {
            $stmt = $conn->prepare("SELECT MobileNumber FROM pdf_files WHERE MobileNumber = ?");
            $stmt->bind_param("s", $MobileNumber);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $query = "UPDATE pdf_files SET $column = ? WHERE MobileNumber = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ss", $pdfdata, $MobileNumber);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    echo "File uploaded successfully for $column.";
                } else {
                    echo "Failed to upload file for $column.";
                }
                $stmt->close();
            } else {
                $query = "INSERT INTO pdf_files (MobileNumber, $column) VALUES (?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ss", $MobileNumber, $pdfdata);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    echo "File uploaded successfully for $column.";
                } else {
                    echo "Failed to upload file for $column.";
                }
                $stmt->close();
            }
        } else {
            echo "Invalid column specified.";
        }
    } else {
        echo "No file uploaded.";
    }
} else {
    echo "No file, column, or MobileNumber specified.";
}
?>
