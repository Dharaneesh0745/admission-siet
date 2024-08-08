<?php

if (isset($_GET['Course'])) {
    $course = $_GET['Course'];
    $Branches = [
        'B.E' => [
            ['name' => 'Computer Science and Engineering'],
            ['name' => 'Cyber Security'],
            ['name' => 'Agriculture Engineering'],
            ['name' => 'Biomedical Engineering'],
            ['name' => 'Civil Engineering'],
            ['name' => 'Electrical and Electronics Engineering'],
            ['name' => 'Information Technology'],
            ['name' => 'Artificial Intelligence and Data Science'],
            ['name' => 'Artificial Intelligence and Machine Learning'],
            ['name' => 'Electronics and Communication Engineering'],
            ['name' => 'Biotechnology'],
            ['name' => 'Food Technology']
        ],
        'B.Tech' => [
            ['name' => 'Computer Science and Engineering'],
            ['name' => 'Cyber Security'],
            ['name' => 'Agriculture Engineering'],
            ['name' => 'Biomedical Engineering'],
            ['name' => 'Civil Engineering'],
            ['name' => 'Electrical and Electronics Engineering'],
            ['name' => 'Information Technology'],
            ['name' => 'Artificial Intelligence and Data Science'],
            ['name' => 'Artificial Intelligence and Machine Learning'],
            ['name' => 'Electronics and Communication Engineering'],
            ['name' => 'Biotechnology'],
            ['name' => 'Food Technology']
        ],
        'M.E' => [
            ['name' => 'ME Computer Science and Engineering'],
            ['name' => 'ME CAD CAM Engineering'],
            ['name' => 'ME Embedded Systems Technology'],
            ['name' => 'ME Structural Engineering'],
            ['name' => 'ME VLSI Design']
        ],
        'M.Tech' => [
            ['name' => 'ME Computer Science and Engineering'],
            ['name' => 'ME CAD CAM Engineering'],
            ['name' => 'ME Embedded Systems Technology'],
            ['name' => 'ME Structural Engineering'],
            ['name' => 'ME VLSI Design']
        ]
    ];

    if (array_key_exists($course, $Branches)) {
        echo json_encode($Branches[$course]);
    } else {
        echo json_encode(['error' => 'Invalid Course.']);
    }
} else {
    echo json_encode(['error' => 'Course parameter is missing.']);
}
?>
