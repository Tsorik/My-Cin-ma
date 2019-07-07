<?php
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'azerty');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $id_memb = $_GET['id'];
    $nom_memb = $_GET['nom'];
    $prenom_memb = $_GET['prenom'];
    
    $reponse1 = $bdd->query('SELECT film.titre AS "titre", film.id_film AS "id", historique_membre.date AS "date" FROM film INNER JOIN historique_membre ON film.id_film = historique_membre.id_film WHERE id_membre =' . $id_memb);
    
    while ($donnees = $reponse1->fetch())
    {
        echo "<tr><td>" . $donnees['titre'] . "</td><td>" . $donnees['date'] . "</td><td><form method='POST' action='#'><input name='id_film' type='hidden' value=" . $donnees['id'] . "><textarea name='avis_film' rows='3' cols='33' placeholder='Ecrivez un avis.'></textarea><input type='submit' name='search' value='Envoyer'></form></td></tr>";
    }

    $reponse1->closeCursor();
    
?>
