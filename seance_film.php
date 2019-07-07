<?php
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'azerty');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    $seance = $_POST['seance'];
    
    ?>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Titre</th>
        </tr>
    </thead>
    <?php
        var_dump($seance);        
        $searchname = $bdd->query("SELECT titre FROM film WHERE date_debut_affiche <= DATE(" . $seance .  ") AND date_fin_affiche >= DATE(" . $seance .")");
        while ($film = $searchname->fetch())
        {
            echo "<tr> <td>" . $film["titre"] . "</td></tr>";
        }
        $searchname->closeCursor();
        var_dump($searchname);
    
?>
    </table>