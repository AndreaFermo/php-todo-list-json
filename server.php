<?php
    if(file_exists('database.json')){
        $importedData = file_get_contents('database.json');
        $todoList = json_decode($importedData, true);
    } else {
        $todoList=[];
    }
  

    if (isset($_POST['itemToPost'])) {
        $todoList[] = ['text' => $_POST['itemToPost'], 'done' => false];

        $dataToSave= json_encode($todoList);
        file_put_contents('database.json', $dataToSave);
    }

    if (isset($_POST['changeValueAt'])) {

        $todoList[$_POST['changeValueAt']]['done'] = !$todoList[$_POST['changeValueAt']]['done'];
       
        $dataToSave= json_encode($todoList);
        file_put_contents('database.json', $dataToSave);

    }

    if (isset($_POST['delate'])) {

        array_splice($todoList, $_POST['delate'], 1);

        $dataToSave= json_encode($todoList);
        file_put_contents('database.json', $dataToSave);

    }

    header('Content-Type: application/json');
    echo json_encode($todoList);