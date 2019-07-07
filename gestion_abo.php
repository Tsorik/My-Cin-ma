<?php
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'azerty');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    $abonn = $_POST["id_abo"];
    $tabl = explode("|", $abonn);
    $abo = $bdd->query('UPDATE membre SET membre.id_abo = '. $tabl[1] .' WHERE membre.id_fiche_perso = ' . $tabl[0]);

?>
<script>alert("Changement d'abonnement effectué");</script>