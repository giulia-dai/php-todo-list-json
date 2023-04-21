<?php

if (file_exists('database.json')) {
    $string = file_get_contents('database.json');
    $todoList = json_decode($string, true);
} else {
    $todoList = [];
};

if (isset($_POST['todoItem'])) {
    $todoList[] = [
        'text' =>  $_POST['todoItem']['text'],
        'done' => $_POST['todoItem']['done'] === "true" ? true : false
    ];

    $myString = json_encode($todoList);
    file_put_contents('database.json', $myString);
}

header('Content-Type: application/json');
echo json_encode($todoList);
