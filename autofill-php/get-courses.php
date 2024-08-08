<?php


if (isset($_GET['CourseType'])) {
    $courseType = $_GET['CourseType'];

    $courseOptions = [
        'UG' => [
            ['name' => 'B.Tech'],
            ['name' => 'B.E']
        ],
        'PG' => [
            ['name' => 'M.Tech'],
            ['name' => 'M.E']
        ]

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
