<?php

// leggo il json e lo salvo in stringa
$json_string = file_get_contents('todo-list.json');

// converto stringa in elemento php (true - stringa => array associativo)
$list = json_decode($json_string, true);


// codice php
if (isset($_POST['taskName'])) {
    $new_item = [
        'taskName' => $_POST['taskName'],
        'description' => $_POST['description'],
        'done' => false        
    ];

    $list[] = $new_item;

    file_put_contents('todo-list.json', json_encode($list));
}

if (isset($_POST['indexToToggle'])) {
    $indexToToggle = $_POST['indexToToggle'];
    $list[$indexToToggle]['done'] = !$list[$indexToToggle]['done'];
    file_put_contents('todo-list.json', json_encode($list));
}


// leggo il file php come fosse in Json
header('Content-Type: application/json');

// ritorno la lista in json e la stampo
echo json_encode($list);