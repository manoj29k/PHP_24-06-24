<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro Php</title>
</head>
<body>
  <h1>PHP Decouverte</h1>  
  <?php   
    // Pour ouvrir un bloc de php, on utilise la balise <?php
    // Pour fermer un bloc de php, on utilise la balise ?>
  
  <?php  
    //  echo est une instruction qui permet d'afficher du texte dans le navigateur 
    echo '<h2>HEllo World</h2>';

    // Print est l'equivalent à echo
    print 'hello world';
    echo '<br>';

    // Declaration d'une variable avec le signe $
    $uneVariable;
    // Affectation  d'une valeur à une variable
    $uneVariable = 'nano';
    // Affichage de la variable 
    echo $uneVariable;
    echo '<br>';

    // Les Types de variables
    $unMesssage ='hello i am a variable';
    echo gettype($unMesssage);
    echo '<br>';
    
    $unBoolean = true;
    echo gettype($unBoolean);
    echo '<br>';
    
    $unTableau = ['pomme', 'poire' , 'Melon'];
    $autreTableau = array('cerise', 'mangue' , 'banane');
    echo $unTableau[0];
    echo '<br>';
    echo $autreTableau[0];
    echo '<br>';
    // phpinfo();


    $unTableauAssociatif=[
        'prenom' => 'manoj',
        'nom' => 'gnanavel'
    ];

    echo $unTableauAssociatif['prenom'];
    echo '<br>';
    echo $unTableauAssociatif['nom'];
    echo '<br>';
    
    echo '<pre>';
        var_dump($unTableauAssociatif);
    echo '</pre>';


    function debug($variable){
        echo '<pre>';
          var_dump($variable);
        echo '</pre>';
    };
    debug($unBoolean);
    // debug($unTableau);


    // debug($GLOBALS );

    debug($_SERVER['HTTP_HOST']);
    debug($unTableauAssociatif['nom']);



    // Une constante permet de sauvegarder une valeur sauf que celle-ci ne peut pas etre modifiée
    // Utile pour conserver les parametres de la base de donnée 
    // Par convention une constante se declare toujours en majuscule
    define('CAPITAL_PAYS','Paris');
    echo CAPITAL_PAYS;
    echo '<br>';
    echo '<br>';

    // Afficher la version de php
    echo PHP_VERSION;
    echo '<br>';

    // Afficher la valeur maximum d'un entier
    echo PHP_INT_MAX;
    echo '<br>';
    // Afficher la valeur minimum d'un entier
    echo PHP_INT_MIN;
    echo '<br>';

    // Afficher le numero de la ligne sur laquelle on est 
    echo __LINE__;
    echo '<br>';
    // Le chemin du fichher 
    echo __FILE__;
    echo '<br>';
    // Le dossier courant 
    echo __DIR__;
    echo '<br>';   
  ?>
  
  <?php 
    // Déclarer 3 variables bleu, blanc , rouge
    $bleu = 'bleu';
    $blanc = 'blanc';
    $rouge = 'rouge';
    // Afficher bleu-blanc-rouge
    echo "{$bleu}-{$blanc}-{$rouge}";
    echo '<br>'; 
    // Déclarer un tableau Associatif:
        /*
            prenom: manoj;
            nom: gnanavel,
            age: 20,
            telephone: 0749413265
        
        */
    $infoTable = [
        'prenom' => 'Manoj', 
        'nom' => 'Gnanavel',
        'age' => 20,
        'téléphone' => '07.49.41.32.65',
    ];
    // Afficher  Bonjour Je m'appelle manoj gnanavel , j'ai 20 ans et mon numéro de téléphoe  est le 000000000
    // echo "Bonjour Je m'appelle $infoTable['prenom']" 
     echo "Bonjour Je m'appelle {$infoTable['prenom']} {$infoTable['nom']} , j'ai {$infoTable['age']} ans et mon numéro de téléphoe est le {$infoTable['téléphone']}";
    echo '<br>';   

    //  Déclarer un infoTableau d'animaux chien, chat, tigre, lion , aigle
    $animals = ['chien', 'chat', 'tigre', 'lion' , 'aigle'];
    // fonction qui transforme un infoTableau en chaine de caractere 
    // Afficher  Mes animaux préferes sont : chien, chat, tigre, lion, aigle
    echo "Mes animaux préférés sont :" . implode(' ',$animals);

    // For loops
    for ($i = 0; $i < 5; $i++){
        echo $i . '<br>  ';
    };
    echo '<br>';
    for ($i = 0; $i < count($animals); $i++){
        echo $animals[$i] . '<br>';
    };
    echo '<br>';
    foreach($animals as $animal){
        echo $animal .'<br>';
    };
    
    echo '<br>';
    foreach($infoTable as $info){
        echo $info . '<br>';
    }
    echo '<br>';
    foreach($infoTable as $key => $info){
        if($key=='téléphone'){
            echo $info .'<br>';
        }
    }

  ?>  

</body> 
</html>