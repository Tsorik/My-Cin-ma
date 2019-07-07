<?php
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'azerty');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $reponse1 = $bdd->query('SELECT * FROM film');

    while ($donnees = $reponse1->fetch())
    {
        echo "<option value='" . $donnees['titre'] . "'>"; 
    }

    $reponse1->closeCursor();
?>