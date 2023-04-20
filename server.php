<?php

    $todoList = [
        ['html', true],
        ['css', true],
        ['javascrypt', true],
    ];

    if (isset($_POST['itemToPost'])) {
        $todoList[] = $_POST['itemToPost'];
    }

    header('Content-Type: application/json');
    echo json_encode($todoList);