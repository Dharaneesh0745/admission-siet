<?php
@include '../config.php';

$studentMobileNo = isset($_POST['StudentMobileNo']) ? $_POST['StudentMobileNo'] : '';

// Fetch student details including document columns
$sql = "SELECT EmisId, Salutation, StudName, StudEmailID, StudDOB, Gender, BloodGroup, Nationality, Religion, Community, Caste, AadhaarNumber, FirstGraduate, SpecialAdmissionQuota, DifferentlyAbled, P_Country, P_State, P_LocationType, P_District, P_Taluk, P_Village, P_Block, P_Pincode, P_VillagePanchayat, P_PostalAddress, C_Country, C_State, C_LocationType, C_District, C_Taluk, C_Village, C_Block, C_Pincode, C_VillagePanchayat, C_PostalAddress, FatherName, FatherOccupation, MotherName, MotherOccupation, GuardianName, Orphan, AnnualFamilyIncome, ParentsMobileNumber, AccountNumber, IfscCode, BankName, BankBranch, City, AcademicYearJoining, StreamType, CourseType, Course, Branch, MediumOfInstruction, ModeOfStudy, DateOfAdmission, TypeOfAdmission, counsellingNumber, RegistrationNumber, LateralEntry, Hosteller, SeekingAdmissionFor, SchoolName10, Board10, SchoolName12, TotalMark10, TotalMark12, MediumOfInstruction10, MediumOfInstruction12, Group12, PhysicsMark, ChemistryMark, MathsMark, CutOff, RegisterNo12, CGPA, NameOfUGcourse, NameOfUGCollege, NameOfDiplomaCourse, PercentageDiploma, NameOfDiplomaCollege, Sport, SportName, SportLevel, ProfilePhoto, CommunityDocument, AadhaarDocument, FirstGraduateDocument, MigrationDocument, IncomeDocument, CounsellingDocument, DiplomaDocument, UGDocument, TotalMark10Document, TotalMark12Document, TransferCertificate FROM umis WHERE StudentMobileNo = '" . $conn->real_escape_string($studentMobileNo) . "'";
$result = $conn->query($sql);
$studentDetails = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            margin: 20px auto;
            padding: 20px;
            max-width: 900px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-size: 1.5em;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            background-color: #ffffff;
        }
        .btn {
            margin-top: 20px;
            border-radius: 20px;
        }
        .document-section {
            margin-top: 30px;
        }
        .document-section label {
            font-weight: bold;
            color: #007bff;
        }
        .document-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            Student Details - <?php echo htmlspecialchars($studentDetails['StudName']); ?>
        </div>
        <div class="card-body">
            <div class="row">
                <?php foreach ($studentDetails as $key => $value) { ?>
                    <?php if (!in_array($key, ['ProfilePhoto', 'CommunityDocument', 'AadhaarDocument', 'FirstGraduateDocument', 'MigrationDocument', 'IncomeDocument', 'CounsellingDocument', 'DiplomaDocument', 'UGDocument', 'TotalMark10Document', 'TotalMark12Document', 'TransferCertificate'])) { ?>
                        <div class="col-md-6 mb-3">
                            <strong><?php echo str_replace('_', ' ', $key); ?>:</strong>
                            <p><?php echo htmlspecialchars($value); ?></p>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="document-section">
                <h5>Select Documents to Download</h5>
                <form method="POST" action="download.php">
                    <input type="hidden" name="StudentMobileNo" value="<?php echo htmlspecialchars($studentMobileNo); ?>">
                    
                    <!-- Checkbox for Select All -->
                    <div class="form-group">
                        <input type="checkbox" id="select-all" class="mr-2">
                        <label for="select-all">Select All Documents</label>
                    </div>

                    <?php
                    // List of document columns
                    $documentColumns = [
                       
                        'CommunityDocument' => 'Community Document',
                        'AadhaarDocument' => 'Aadhaar Document',
                        'FirstGraduateDocument' => 'First Graduate Document',
                        'MigrationDocument' => 'Migration Document',
                        'IncomeDocument' => 'Income Document',
                        'CounsellingDocument' => 'Counselling Document',
                        'DiplomaDocument' => 'Diploma Document',
                        'UGDocument' => 'UG Document',
                        'TotalMark10Document' => '10th Marksheet Document',
                        'TotalMark12Document' => '12th Marksheet Document',
                        'TransferCertificate' => 'Transfer Certificate'
                    ];

                    foreach ($documentColumns as $key => $label) {
                        if (!empty($studentDetails[$key])) {
                    ?>
                        <div class="document-item form-group">
                            <div>
                                <input type="checkbox" name="documentType[]" value="<?php echo htmlspecialchars($key); ?>" class="document-checkbox mr-2">
                                <label><?php echo htmlspecialchars($label); ?></label>
                            </div>
                            <a href="view_documents.php?StudentMobileNo=<?php echo htmlspecialchars($studentMobileNo); ?>&document=<?php echo htmlspecialchars($key); ?>" target="_blank" class="btn btn-info btn-sm">View</a>
                        </div>
                    <?php
                        }
                    }
                    ?>
                    <button type="submit" class="btn btn-primary">Download Selected Documents</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // JavaScript for handling "Select All" functionality
    document.getElementById('select-all').addEventListener('click', function(event) {
        let checkboxes = document.querySelectorAll('.document-checkbox');
        checkboxes.forEach(checkbox => checkbox.checked = event.target.checked);
    });
</script>

</body>
</html>
