<?php 

require_once './src/config/bdd.php';

$res = $pdo->prepare("SELECT * FROM book");

$res -> execute();
// $res -> fetchAll();
$books = $res -> fetchAll();

// var_dump($books);