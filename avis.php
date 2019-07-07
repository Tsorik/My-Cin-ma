 <?php
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'azerty');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    $abonn = $_GET["id"];
    $avis = $_POST['avis_film'];
    $id = $_POST['id_film'];

    

    if(isset($avis))
    {
        $abo = $bdd->query('UPDATE historique_membre SET avis = "'. $avis .'" WHERE id_membre = ' . $abonn  . ' AND id_film = ' . $id);
        var_dump($abo);
    }
?>
