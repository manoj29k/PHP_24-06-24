<?php

var_dump($_POST);
session_start();

// TRAITER LES DONNEES
//On va vérifier si les variables existent et si elles ne sont vide
// Suppimer les espaces avant et apres dans les chaines de caracteres
// le mot de passe vous aller le hacher
// rediriger vers la page accueil 
// Sinon on afficher 
// 'Erreur dans le formulaire

if ($_SERVER ["REQUEST_METHOD"] == "POST") {

if(isset($_POST['name']) && isset($_POST['pswd']) && 
!empty($_POST['name']) && !empty($_POST['pswd']))
{
    $name = trim($_POST['name']);
    $pswd = trim($_POST['pswd']);

    $pswd = password_hash($pswd, PASSWORD_DEFAULT);
    echo $pswd;

    // Je veux sauvegarder un message en session afin de 'afficher sur la page d'accueil
    $_SESSION['message'] = 'Super, vous êtes incrits sur le cookie';
    // je veux sauvegarder un message en session, qu'il connecté avec un cookie
    setcookie('connected', true, time() + 3600, '/');


    header('Location: ../index.php');
    exit();

    echo "Connexion réussie ! Utilisateur est : $name $pswd";
}else {
    echo "Erreur dans le formulaire";
}

}