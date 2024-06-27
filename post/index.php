<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La méthode POST</title>
</head>
<body>
    <?php
    if (isset($_SESSION["message"])){
        echo $_SESSION["message"];
        unset($_SESSION["message"]);
    }

    if ($_COOKIE["connected"] == "true"){
        echo "Vous êtes connecté";
    }
    ?>

    <form action="./src/traitement.php" method="POST">
        <div>
           <label for="name">Nom</label>
           <input type="text" id="name" name="name">
        </div>

        <div>
          <label for="pswd">Mot de passe</label>
          <input type="password" id="pswd" name="pswd">
       </div>
       <input type="submit" value="Envoyer">

    </form>
</body>
</html>