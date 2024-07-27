<?php
@include 'config.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "SELECT pdf FROM pdf_files WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $pdf, 'application/pdf');
    mysqli_stmt_fetch($stmt);

    if ($pdf) {
        header("Content-Type: application/pdf");
        header("Content-Disposition: attachment; filename=\"download.pdf\"");
        echo $pdf;
    } else {
        echo "Error: File not found.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Error: ID parameter missing.";
}
?>
