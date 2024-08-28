<?php
include 'config.php';

if (isset($_FILES['file']) && isset($_POST['column']) && isset($_POST['StudentMobileNo'])) {
    $file = $_FILES['file'];
    $column = $_POST['column'];
    $StudentMobileNo = $_POST['StudentMobileNo'];

    if ($file['tmp_name'] != '') {
        $fileContent = file_get_contents($file['tmp_name']);
        $allowedColumns = [
            'ProfilePhoto', 'CommunityDocument', 'AadhaarDocument', 'FirstGraduateDocument',
            'MigrationDocument', 'IncomeDocument', 'CounsellingDocument', 'DiplomaDocument',
            'UGDocument', 'TotalMark10Document', 'TotalMark12Document', 'TransferCertificate'
        ];

        if (in_array($column, $allowedColumns)) {
            $query = "SELECT COUNT(*) FROM umis WHERE StudentMobileNo = $StudentMobileNo";
            $result = mysqli_query($conn, $query);
            if (!$result) {
                die('Query failed: ' . mysqli_error($conn));
            }
            $recordCount = mysqli_fetch_row($result)[0];

            $fileContentEscaped = mysqli_real_escape_string($conn, $fileContent);

            if ($recordCount > 0) {
                $query = "UPDATE umis SET $column = '{$fileContentEscaped}' WHERE StudentMobileNo = $StudentMobileNo";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo "File updated successfully for $column.";
                } else {
                    echo "Failed to update file for $column. Error: " . mysqli_error($conn);
                }
            } else {
                $query = "INSERT INTO umis (StudentMobileNo, $column) VALUES ($StudentMobileNo, '{$fileContentEscaped}')";
                $result = mysqli_query($conn, $query);

                if ($result) {
                    echo "File uploaded successfully for $column.";
                } else {
                    echo "Failed to upload file for $column. Error: " . mysqli_error($conn);
                }
            }
        } else {
            echo "Invalid column specified.";
        }
    } else {
        echo "No file uploaded.";
    }
} else {
    echo "No file, column, or StudentMobileNo specified.";
}

// Close the database connection
mysqli_close($conn);
?>
