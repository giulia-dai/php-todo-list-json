<?php
$todoList = [
    [
        "text" => "HTML",
        "done" => true
    ],
    [
        "text" => "CSS",
        "done" => false
    ],
    [
        "text" => "Responsive design",
        "done" => false
    ],
    [
        "text" => "Javascript",
        "done" => true
    ],
    [
        "text" => "PHP",
        "done" => true
    ],
    [
        "text" => "Laravel",
        "done" => false
    ],
    [
        "text" => "Bootstrap",
        "done" => true
    ]

];
if (isset($_POST['todoItem'])) {
    $todoList[] = $_POST['todoItem'];
}

header('Content-Type: application/json');
echo json_encode($todoList);
