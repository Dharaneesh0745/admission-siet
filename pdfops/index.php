<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Viewer</title>
</head>
<body>
    <h1>View Documents</h1>
    <form action="view_documents.php" method="POST">
        <label for="documentType">Select Document Type:</label>
        <select name="documentType" id="documentType">
            <option value="CommunityDocument">Community Document</option>
            <option value="AadhaarDocument">Aadhaar Document</option>
            <option value="FirstGraduateDocument">First Graduate Document</option>
            <option value="MigrationDocument">Migration Document</option>
            <option value="IncomeDocument">Income Document</option>
            <option value="CounsellingDocument">Counselling Document</option>
            <option value="DiplomaDocument">Diploma Document</option>
            <option value="UGDocument">UG Document</option>
            <option value="TotalMark10Document">Total Mark 10 Document</option>
            <option value="TotalMark12Document">Total Mark 12 Document</option>
            <option value="TransferCertificate">Transfer Certificate</option>
        </select>
        <button type="submit">View Documents</button>
    </form>
</body>
</html>
