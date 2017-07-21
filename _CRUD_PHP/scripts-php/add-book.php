<?php 
require_once __DIR__ . '/../vendor/autoload.php';

if($_GET['txt-new-title'] != null && $_GET['txt-new-author'] != null){
    $title  = $_GET['txt-new-title'];
    $author = $_GET['txt-new-author'];

    $bd_fuctions = new Crud();

    $bd_fuctions->insertBook($title, $author);
}

header('location: ../');
exit;