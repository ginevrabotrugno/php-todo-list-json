<?php

// leggo il json e lo salvo in stringa
$json_string = file_get_contents('todo-list.json');

// converto stringa in elemento php (true - stringa => array associativo)
$list = json_decode($json_string, true);


// codice php


// leggo il file php come fosse in Json
header('Content-Type: application/json');

// ritorno la lista in json e la stampo
echo json_encode($list);