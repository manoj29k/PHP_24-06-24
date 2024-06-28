<?php

function getAllBooks($pdo)
{
    $stmt = $pdo->query('SELECT * FROM book');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getBookDetailsById($pdo, $bookId)
{
    $stmt = $pdo->prepare(
        'SELECT book.*, auteur.nom, auteur.prenom, auteur.date_naissance, auteur.pays_origine
        FROM book
        JOIN auteur ON book.id_auteur = auteur.id
        WHERE book.id = :bookId'
    );
    $stmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
};




function addbook($conn, $title , $description, $annee_parution, $idauteur)
{
    $stmt = $conn->prepare('INSERT INTO book (nom, description , annee_parution, id_auteur) VALUES (:title, :description, :annee_parution, :id_auteur)'); ;
    $stmt->bindParam(':title', $title, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    $stmt->bindParam(':annee_parution', $annee_parution, PDO::PARAM_INT);
    $stmt->bindParam(':id_auteur', $idauteur, PDO::PARAM_INT);
    $stmt->execute();

}