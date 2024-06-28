<?php
require_once '../config/db.php';
require_once '../repository/bookRepository.php';

session_start();

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (
        !isset($_POST['nom']) ||
        !isset($_POST['description']) ||
        !isset($_POST['annee_parution']) ||
        !isset($_POST['id_auteur']) ||
        empty($_POST['nom']) ||
        empty($_POST['description']) ||
        empty($_POST['annee_parution']) ||
        empty($_POST['id_auteur'])
    ) {
        $_SESSION['message'] = 'Veuillez recommencer';
        header('Location: ../../view/add-book.php');
        exit;
    }

    // Récupérer les données du formulaire
    $nom = trim($_POST['nom']);
    $description = $_POST['description'];
    $annee_parution = $_POST['annee_parution'];
    $id_auteur = $_POST['id_auteur'];

    // Validation des données
    // ...
    $test = connectDB();

    addbook($test, $nom, $description, $annee_parution, $id_auteur);

    // Insertion des données dans la base de données
   
    // ...
    // Creer un message de reussite et rediriger

    // Redirection ou affichage d'un message de succès
    // ...
}
