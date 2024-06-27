<?php   
    require_once '../src/config/bdd.php';
    $res = $pdo->prepare("SELECT * FROM book b JOIN auteur a ON id_auteur=a.id");
    $res -> execute();
    $books = $res -> fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>
<body>
    <?php 
        echo $_GET['id'];
    ?>
</body>
</html>