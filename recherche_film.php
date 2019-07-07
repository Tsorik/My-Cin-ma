<?php
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'azerty');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $name = $_POST['nom_film'];
    $genre = $_POST['id_genres'];
    $distrib = $_POST['id_distrib'];
    ?>
    <?php

    if(isset($name) OR $genre !== "rien" OR $distrib !== "rien")
    {
        ?>
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Titre</th>
            <th class="th-sm">Date de production</th>
        </tr>
    </thead>
<?php
    // Titre
    if(isset($name) AND $genre === "rien" AND $distrib === "rien")
    { 
        
        $searchname = $bdd->query('SELECT * FROM film WHERE titre LIKE "%' .$name . '%"');
        
        while ($film = $searchname->fetch())
        {
            echo '<tr> <td>'.$film["titre"] . "</td><td>" . $film["annee_prod"]."</td> ";
        }
        $searchname->closeCursor();
       
        
    } 

    // Titre + Genre
    elseif(isset($name) AND $genre >= 0 AND $distrib === "rien")
    {
        $searchname = $bdd->query('SELECT * FROM film WHERE id_genre = ' . $genre . ' AND titre LIKE "%' . $name . '%" ');
        while ($film = $searchname->fetch())
        {
            echo '<tr> <td>'.$film["titre"] . "</td><td>" . $film["annee_prod"]."</td> ";
        }
        $searchname->closeCursor();
        
        
    }

    // Titre + Distrib
    elseif(isset($name) AND $genre === 'rien' AND $distrib >= 0)
    {

        $searchname = $bdd->query('SELECT * FROM film WHERE id_distrib = ' . $distrib . ' AND titre LIKE "%' . $name . '%" ');
        
        while ($film = $searchname->fetch())
        {
            echo '<tr> <td>'.$film["titre"] . "</td><td>" . $film["annee_prod"]."</td> ";
        }
        $searchname->closeCursor();
        
    }
    
    // Titre + Genre + Distrib
    elseif(isset($name) AND isset($genre) AND isset($distrib))
    {

        $searchname = $bdd->query('SELECT * FROM film WHERE id_genre = ' . $genre . ' AND id_distrib = ' . $distrib . ' AND titre LIKE "%' . $name . '%" ');
        
        while ($film = $searchname->fetch())
        {
            echo '<tr> <td>'.$film["titre"] . "</td><td>" . $film["annee_prod"]."</td> ";
        }
        $searchname->closeCursor();
        
    }
}
?> 

</table> 
