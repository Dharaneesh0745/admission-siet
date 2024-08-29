<?php
include '../config.php'; 

// Initialize response array
$response = array();

// Fetch all student data
$query = "SELECT * FROM umis";
$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Total records
$response['total_records'] = count($data);

// Total male and female counts
$response['male_count'] = 0;
$response['female_count'] = 0;

// Department-wise counts (for pie chart)
$response['departmentData'] = array();

// Daily registrations (for line chart)
$response['dailyRegistrations'] = array();

// Management and Counseling students count
$response['managementStudentsCount'] = 0;
$response['counselingStudentsCount'] = 0;

// Course-wise counts (for pie chart)
$response['courseData'] = array();

// Iterate through student data to calculate required statistics
foreach ($data as $student) {
    // Count male and female
    if (strtolower($student['Gender']) == 'Male') {
        $response['male_count']++;
    } elseif (strtolower($student['Gender']) == 'Female') {
        $response['female_count']++;
    }

    // Department-wise counts
    $department = $student['Branch'] ?? 'Unknown';
    if (!isset($response['departmentData'][$department])) {
        $response['departmentData'][$department] = 0;
    }
    $response['departmentData'][$department]++;

    // Daily registrations
    $dateOfAdmission = $student['DateOfAdmission'];
    if ($dateOfAdmission) {
        $date = date('Y-m-d', strtotime($dateOfAdmission));
        if (!isset($response['dailyRegistrations'][$date])) {
            $response['dailyRegistrations'][$date] = 0;
        }
        $response['dailyRegistrations'][$date]++;
    }

    // Management and Counseling counts
    if (strtolower($student['TypeOfAdmission']) == 'management') {
        $response['managementStudentsCount']++;
    } elseif (strtolower($student['TypeOfAdmission']) == 'counselling') {
        $response['counselingStudentsCount']++;
    }

    // Course-wise counts
    $course = $student['Course'] ?? 'Unknown';
    if (!isset($response['courseData'][$course])) {
        $response['courseData'][$course] = 0;
    }
    $response['courseData'][$course]++;
}

// Output JSON response
header('Content-Type: application/json');
echo json_encode($response);

// Close database connection
mysqli_close($conn);
?>
