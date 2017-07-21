<?php 

require_once __DIR__ . '/../vendor/autoload.php';

if(isset($_GET['cod'])){
    $cod = $_GET['cod'];
    $bd_fuctions = new Crud();

    $bd_fuctions->deleteBook($cod);

}

header('location: ../');
exit;