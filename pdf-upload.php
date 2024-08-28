<?php
@include 'config.php';

// Debugging output to confirm data receipt
// error_log("POST data: " . print_r($_POST, true));
// error_log("FILES data: " . print_r($_FILES, true));

if (isset($_FILES['file']) && isset($_POST['column']) && isset($_POST['StudentMobileNo'])) {
    $file = $_FILES['file'];
    $column = $_POST['column'];
    $StudentMobileNo = $_POST['StudentMobileNo'];

    if ($file['tmp_name'] != '') {
        $pdfdata = addslashes(file_get_contents($file['tmp_name']));
        $allowedColumns = ['ProfilePhoto', 
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
        'TransferCertificate'];

        if (in_array($column, $allowedColumns)) {
            $stmt = $conn->prepare("SELECT * FROM umis WHERE StudentMobileNo = ?");
            $stmt->bind_param("s", $StudentMobileNo);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $query = "UPDATE umis SET $column = ? WHERE StudentMobileNo = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ss", $pdfdata, $StudentMobileNo);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    echo "File uploaded successfully for $column.";
                } else {
                    echo "Failed to Update file for $column.";
                }
                $stmt->close();
            } else {
                $query = "INSERT INTO umis (StudentMobileNo, $column) VALUES (?, ?)";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("ss", $StudentMobileNo, $pdfdata);
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
