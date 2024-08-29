<?php
@include '../config.php';

// Initialize filter variables
$typeOfAdmissionFilter = isset($_GET['TypeOfAdmission']) ? $conn->real_escape_string($_GET['TypeOfAdmission']) : '';
$branchFilter = isset($_GET['Branch']) ? $conn->real_escape_string($_GET['Branch']) : '';
$genderFilter = isset($_GET['Gender']) ? $conn->real_escape_string($_GET['Gender']) : '';
$courseTypeFilter = isset($_GET['CourseType']) ? $conn->real_escape_string($_GET['CourseType']) : '';
$mobileNoFilter = isset($_GET['StudentMobileNo']) ? $conn->real_escape_string($_GET['StudentMobileNo']) : '';
$documentTypeFilter = isset($_GET['DocumentType']) ? $conn->real_escape_string($_GET['DocumentType']) : ''; // New filter for document type

// SQL query with filters
$sql = "SELECT * FROM umis WHERE 1=1";
if ($typeOfAdmissionFilter != '') {
    $sql .= " AND TypeOfAdmission = '" . $typeOfAdmissionFilter . "'";
}
if ($branchFilter != '') {
    $sql .= " AND Branch = '" . $branchFilter . "'";
}
if ($genderFilter != '') {
    $sql .= " AND Gender = '" . $genderFilter . "'";
}
if ($courseTypeFilter != '') {
    $sql .= " AND CourseType = '" . $courseTypeFilter . "'";
}
if ($mobileNoFilter != '') {
    $sql .= " AND StudentMobileNo = '" . $mobileNoFilter . "'";
}
if ($documentTypeFilter != '') {
    $sql .= " AND " . $documentTypeFilter . " IS NOT NULL"; // Filter for document type
}

$result = $conn->query($sql);

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
        .container {
            margin-top: 20px;
        }
        .card {
            margin-bottom: 20px;
            padding: 20px;
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
            margin: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #dee2e6;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            Student Details
        </div>
        <div class="card-body">
            <!-- Filter Form -->
            <form method="GET" action="">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="TypeOfAdmission">Filter by Type of Admission:</label>
                        <select name="TypeOfAdmission" id="TypeOfAdmission" class="form-control">
                            <option value="">All</option>
                            <option value="management" <?php echo ($typeOfAdmissionFilter == 'management') ? 'selected' : ''; ?>>Management</option>
                            <option value="counseling" <?php echo ($typeOfAdmissionFilter == 'counseling') ? 'selected' : ''; ?>>Counseling</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Branch">Filter by Branch:</label>
                        <select name="Branch" id="Branch" class="form-control">
                            <option value="">All</option>
                            <!-- UG Courses -->
                            <optgroup label="Undergraduate">
                                <!-- Add UG Course Options Here -->
                            </optgroup>
                            <!-- PG Courses -->
                            <optgroup label="Postgraduate">
                                <option value="ME Computer Science and Engineering" <?php echo ($branchFilter == 'ME Computer Science and Engineering') ? 'selected' : ''; ?>>ME Computer Science and Engineering</option>
                                <option value="ME CAD CAM Engineering" <?php echo ($branchFilter == 'ME CAD CAM Engineering') ? 'selected' : ''; ?>>ME CAD CAM Engineering</option>
                                <option value="ME Embedded Systems Technology" <?php echo ($branchFilter == 'ME Embedded Systems Technology') ? 'selected' : ''; ?>>ME Embedded Systems Technology</option>
                                <option value="ME Structural Engineering" <?php echo ($branchFilter == 'ME Structural Engineering') ? 'selected' : ''; ?>>ME Structural Engineering</option>
                                <option value="ME VLSI Design" <?php echo ($branchFilter == 'ME VLSI Design') ? 'selected' : ''; ?>>ME VLSI Design</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="Gender">Filter by Gender:</label>
                        <select name="Gender" id="Gender" class="form-control">
                            <option value="">All</option>
                            <option value="Male" <?php echo ($genderFilter == 'Male') ? 'selected' : ''; ?>>Male</option>
                            <option value="Female" <?php echo ($genderFilter == 'Female') ? 'selected' : ''; ?>>Female</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3">
                        <label for="CourseType">Filter by Course Type:</label>
                        <select name="CourseType" id="CourseType" class="form-control">
                            <option value="">All</option>
                            <option value="UG" <?php echo ($courseTypeFilter == 'UG') ? 'selected' : ''; ?>>UG</option>
                            <option value="PG" <?php echo ($courseTypeFilter == 'PG') ? 'selected' : ''; ?>>PG</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="StudentMobileNo">Filter by Student Mobile No:</label>
                        <input type="text" name="StudentMobileNo" id="StudentMobileNo" class="form-control" value="<?php echo htmlspecialchars($mobileNoFilter); ?>">
                    </div>

                    <div class="form-group col-md-3">
                        <label for="DocumentType">Filter by Document Type:</label>
                        <select name="DocumentType" id="DocumentType" class="form-control">
                            <option value="">All</option>
                            <option value="ProfilePhoto" <?php echo ($documentTypeFilter == 'ProfilePhoto') ? 'selected' : ''; ?>>Profile Photo</option>
                            <option value="CommunityDocument" <?php echo ($documentTypeFilter == 'CommunityDocument') ? 'selected' : ''; ?>>Community Document</option>
                            <option value="AadhaarDocument" <?php echo ($documentTypeFilter == 'AadhaarDocument') ? 'selected' : ''; ?>>Aadhaar Document</option>
                            <option value="FirstGraduateDocument" <?php echo ($documentTypeFilter == 'FirstGraduateDocument') ? 'selected' : ''; ?>>First Graduate Document</option>
                            <option value="MigrationDocument" <?php echo ($documentTypeFilter == 'MigrationDocument') ? 'selected' : ''; ?>>Migration Document</option>
                            <option value="IncomeDocument" <?php echo ($documentTypeFilter == 'IncomeDocument') ? 'selected' : ''; ?>>Income Document</option>
                            <option value="CounsellingDocument" <?php echo ($documentTypeFilter == 'CounsellingDocument') ? 'selected' : ''; ?>>Counselling Document</option>
                            <option value="DiplomaDocument" <?php echo ($documentTypeFilter == 'DiplomaDocument') ? 'selected' : ''; ?>>Diploma Document</option>
                            <option value="UGDocument" <?php echo ($documentTypeFilter == 'UGDocument') ? 'selected' : ''; ?>>UG Document</option>
                            <option value="TotalMark10Document" <?php echo ($documentTypeFilter == 'TotalMark10Document') ? 'selected' : ''; ?>>10th Mark Document</option>
                            <option value="TotalMark12Document" <?php echo ($documentTypeFilter == 'TotalMark12Document') ? 'selected' : ''; ?>>12th Mark Document</option>
                            <option value="TransferCertificate" <?php echo ($documentTypeFilter == 'TransferCertificate') ? 'selected' : ''; ?>>Transfer Certificate</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Filter</button>
                <button type="button" class="btn btn-secondary" onclick="resetFilters()">Reset</button>
            </form>

            <!-- Data Table -->
            <form method="POST" action="download_merge.php" id="mergeForm">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>Student Mobile No</th>
                            <th>Emis Id</th>
                            <th>Stud Name</th>
                            <th>Gender</th>
                            <th>Type Of Admission</th>
                            <th>Course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td><input type='checkbox' name='studentMobileNos[]' value='" . $row["StudentMobileNo"] . "'></td>";
                                echo "<td>" . htmlspecialchars($row["StudentMobileNo"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["EmisId"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["StudName"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["Gender"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["TypeOfAdmission"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["Course"]) . "</td>";
                                echo "<td>
                                        <form method='POST' action='view.php' style='display:inline;'>
                                            <input type='hidden' name='StudentMobileNo' value='" . htmlspecialchars($row["StudentMobileNo"]) . "'>
                                            <button type='submit' name='action' value='view' class='btn btn-info btn-sm'>View</button>
                                        </form>
                                      </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8'>No results found</td></tr>";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-success">Download Selected PDFs</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
document.getElementById('selectAll').addEventListener('click', function() {
    var checkboxes = document.querySelectorAll('input[name="studentMobileNos[]"]');
    for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
    }
});

function resetFilters() {
    document.getElementById('TypeOfAdmission').selectedIndex = 0;
    document.getElementById('Branch').selectedIndex = 0;
    document.getElementById('Gender').selectedIndex = 0;
    document.getElementById('CourseType').selectedIndex = 0;
    document.getElementById('StudentMobileNo').value = '';
    document.getElementById('DocumentType').selectedIndex = 0; // Reset document type filter
}
</script>

</body>
</html>
