<?php
include '../config.php'; 

$query = "SELECT * FROM enquiryform2";

$result = mysqli_query($conn, $query);

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

$total_records = mysqli_num_rows($result);

$response = array(
    'total_records' => $total_records,
    'students' => $data
);

header('Content-Type: application/json');
echo json_encode($response);

mysqli_close($conn);
?>
