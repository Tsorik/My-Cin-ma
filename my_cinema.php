<?php
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'azerty');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
?>
<!-- Formulaire de recherche de film -->
    <form method="POST" action="my_cinema_index.php">
        <label for="nom_film">Titre du film : </label>
        <!-- Par titre -->
        <input type="text" name="nom_film" id="nom_film"><br><br>

        <select name="id_genres">
            <option value="rien" selected>--Genre--</option>   
<!-- Par genre -->
<?php
    $reponse1 = $bdd->query('SELECT * FROM genre');
    while ($donnees = $reponse1->fetch())
    {
        echo "<option value=" . $donnees['id_genre'] .">" . $donnees['nom'] . "</option>";
    }

    $reponse1->closeCursor();
?>
        </select>
        <select name="id_distrib">
            <option value="rien" selected>--Distributeur--</option>
<!-- Par distributeur -->
<?php
    $reponse2 = $bdd->query('SELECT * FROM distrib');
    while ($donnees = $reponse2->fetch())
    {
        echo "<option value=" . $donnees['id_distrib'] . ">" . $donnees['nom'] . "</option>";
    }

    $reponse2->closeCursor();
?>


        </select>
<!-- Envoie -->
        <input type="submit" name="search" value="Rechercher">
    </form>
    <div class="row">
            <?php include './recherche_film.php'?>
            </div>

