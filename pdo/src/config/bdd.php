<?php  

// L'extension PDO, pour php Data Objects, Définit une interface pour acceder à une base de données dépuis php , et permet d'executer des requetes SQL.
try{
    $pdo = new PDO(
        //driver mysql, server de la BDD(host) ,nom de la bdd
        'mysql:host=localhost;dbname=library_db', 
        'root', //Nom d'utilisateur
        '', // Mot de passe
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] //On affiche les erreurs
    );
} catch(Exception $e){
    die('erreur'. $e->getMessage());
}


