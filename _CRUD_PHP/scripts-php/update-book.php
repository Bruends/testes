<?php 
require_once __DIR__ . '/../vendor/autoload.php';

if($_GET['txt-update-cod'] != null && $_GET['txt-update-title'] != null && $_GET['txt-update-author'] != null){
    $cod    = $_GET['txt-update-cod'];
    $title  = $_GET['txt-update-title'];
    $author = $_GET['txt-update-author'];

    $bd_fuctions = new Crud();

    $bd_fuctions->updateBook($cod, $title, $author);
}

header('location: ../');
exit;