<?php


if (isset($_GET['CourseType'])) {
    $courseType = $_GET['CourseType'];

    // Define the course options
    $courseOptions = [
        'UG' => [
            ['name' => ''],
            ['name' => ''],
            ['name' => ''],
            ['name' => ''],
            ['name' => ''],
        ],
        'PG' => [
            ['name' => ''],
            ['name' => ''],
            ['name' => ''],
            ['name' => ''],
            ['name' => ''],
        ],
        // Add more course types and courses as needed
    ];

    if (array_key_exists($courseType, $courseOptions)) {
        echo json_encode($courseOptions[$courseType]);
    } else {
        echo json_encode(['error' => 'Invalid Course Type.']);
    }
} else {
    echo json_encode(['error' => 'CourseType parameter is missing.']);
}
?>
