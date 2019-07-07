<?php
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'azerty');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    $date = $_POST["date"];
    $film = $_POST["titre_film"];
    $id_memb = $_GET['id'];

    $response = $bdd->query('SELECT id_film FROM film WHERE titre like "' . $film . '"');
    $id_film = $response->fetch()['id_film'];

   if(isset($date))
   {
        $abo = $bdd->query('INSERT INTO historique_membre(id_membre, id_film, historique_membre.date) VALUE ("' . $id_memb . '", "' . $id_film . '", DATE("' . $date . ' 00:00:00"))');
        ?>
        <script>alert("Ajout de film effectué");</script>
        <?php
    }   
  
?>
