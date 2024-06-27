<?php 
    include_once './src/repository/book.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    foreach($books as $key => $book  ){
   
?>
    
  <div>
        <h2> <?= $book['nom'] ?> </h2>
        <p><?= $book['description']  ?></p>
        <p><?=  $book['annee_parution'] ?></p>
        <a href="./view/detail.php<?= $book['id']?> ">detail</a>
  </div>

<?php } ?>


</body>
</html>