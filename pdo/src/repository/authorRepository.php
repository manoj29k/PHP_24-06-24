<?php

function getAllAuthors($conn)
{
    $stmt = $conn->query('SELECT id, nom  FROM auteur');
    return $stmt->fetchAll();
}
