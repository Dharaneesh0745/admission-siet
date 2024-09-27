<?php
@include '../config.php';

require_once '../vendor/autoload.php';

use setasign\Fpdi\Fpdi;

// Define the StreamReader class
class StreamReader
{
    public static function create($data)
    {
        return fopen('data://text/plain;base64,' . base64_encode($data), 'r');
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentMobileNo = isset($_POST['StudentMobileNo']) ? $_POST['StudentMobileNo'] : '';
    $documentTypes = isset($_POST['documentType']) ? $_POST['documentType'] : [];

    if (!empty($studentMobileNo) && !empty($documentTypes)) {
        // Create a new FPDI instance
        $pdf = new Fpdi();

        foreach ($documentTypes as $documentType) {
            $sql = "SELECT $documentType FROM umis WHERE StudentMobileNo = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param('s', $studentMobileNo);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $stmt->close();

            if (!empty($row[$documentType])) {
                // Load the PDF from the BLOB data
                $pdfData = $row[$documentType];
                $pdf->addPage();
                $pdf->setSourceFile(StreamReader::create($pdfData));
                $tplId = $pdf->importPage(1);
                $pdf->useTemplate($tplId);
            }
        }

        // Output the merged PDF
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="merged_document.pdf"');
        echo $pdf->Output('S'); // Output as string
        exit;
    } else {
        echo "No student mobile number or document types provided.";
    }
} else {
    echo "Invalid request method.";
}