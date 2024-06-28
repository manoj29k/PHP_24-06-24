+<?php

    require_once '../src/config/db.php';
    require_once '../src/repository/authorRepository.php';

    $pdo = connectDB();
    $authors = getAllAuthors($pdo);

    session_start();

    ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librairie Digitale - Ajouter un livre</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <header>
        <h1>Library</h1>
    </header>

    <main>
        <form action="../src/traitement/add_book.php" method="post">
            <div class="form-group">
                <label for="nom" class="form-label">Titre</label>
                <input type="text" name="nom" id="nom" class="form-input" >
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-textarea" required></textarea>
            </div>
            <div class="form-group">
                <label for="year_parution" class="form-label">Année de parution</label>
                <input type="number" name="annee_parution" id="year_parution" step="1" min="0" max="9999" placeholder="1900" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="id_author" class="form-label">Auteur</label>
                <select name="id_auteur" id="id_author" class="form-select">
                    <?php foreach ($authors as $author) { ?>
                        <option value="<?= htmlspecialchars($author['id']) ?>">
                            <?= htmlspecialchars("{$author['nom']}") ?>
                        </option>
                    <?php } ?>

                </select>
            </div>
            <!-- CHAMPS DE FORMULAIRE POUR AFFICHER LA LISTE DES AUTEURS -->
            <input type="submit" value="Ajouter" class="form-submit">

            <?php
            if(isset($_SESSION['message'])){
                echo "<p>{$_SESSION['message']}</p>";
                unset($_SESSION['message']);
            }
            ?>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Library</p>
    </footer>
</body>

</html>