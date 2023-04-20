<?php

    $todoList = [
        ['html', true],
        ['css', false],
        ['javascrypt', true],
    ];

    header('Content-Type: application/json');
    echo json_encode($todoList);