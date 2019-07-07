<?php
try 
{
    $bdd = new PDO('mysql:host=localhost;dbname=cinema;charset=utf8', 'root', 'azerty');
} 
catch (Exception $e) 
{
    die('Erreur : ' . $e->getMessage());
}

if (isset($_POST['info']))
{
    $info = $_POST['info'];
    $tabl_info = explode("|", $info);
    $search_nom = $tabl_info[0];
    $search_prenom = $tabl_info[1];
}
else
{
    $search_nom = $_POST["nom"];
    $search_prenom = $_POST["prenom"];
}

$reponse1 = $bdd->query('SELECT * FROM fiche_personne INNER JOIN membre ON id_fiche_perso = id_perso WHERE fiche_personne.prenom LIKE "%' . $search_prenom . '%" AND fiche_personne.nom LIKE "%' . $search_nom . '%"');
if ($_POST['data']) {
    include 'gestion_abo.php';
}
if (isset($search_nom) or isset($search_prenom)) 
{
    ?>
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="th-sm">Membre</th>
            <th class="th-sm">Abonnement</th>
        </tr>
    </thead>
    <?php
    while ($donnees = $reponse1->fetch()) 
    {
        echo '<tr> <td>'.$donnees["nom"] . " " . $donnees["prenom"]."</td> ";
        echo "<td>  <form method='POST' action='recherche_membre_index.php'>
                <input name='info' type='hidden' value='" . $search_nom . "|" . $search_prenom . "'>
                <select name='id_abo'>";
               
                $reponse2 = $bdd->query('SELECT * FROM abonnement');
                $recherche_abo = $bdd->query('SELECT * FROM membre INNER JOIN fiche_personne ON id_fiche_perso = id_perso 
                                              WHERE fiche_personne.prenom LIKE"%' . $donnees['prenom'] . '%" AND fiche_personne.nom LIKE "%' . $donnees['nom'] . '%"');
                $id_abo = $recherche_abo->fetchAll()[0];
                echo '<option value="delete">--Pas d\'abonnement--</option>';
                while ($donnees_abo = $reponse2->fetch())
                {
                    if($donnees_abo['id_abo'] == $id_abo['id_abo'])
                    {
                        echo "<option value='" . $id_abo['id_perso'] . " | " . $donnees_abo['id_abo'] . "' selected='selected'>" . $donnees_abo['nom'] . "</option>";

                    }
                    else{
                        echo "<option value='" . $id_abo['id_perso'] . " | " . $donnees_abo['id_abo'] . "'>" . $donnees_abo['nom'] . "</option>";
                    }
                    
                }

                $reponse2->closeCursor();

        echo '</select>
                <input type="submit" name="data" value="changer"/>
              </form></td>
              <td><a href="historique_index.php?nom=' . $donnees["nom"] . '&prenom=' . $donnees["prenom"] . '&id=' . $donnees["id_membre"] .'">Historique</a> </td>
              </tr>';
    }

    $reponse1->closeCursor();
}


?>
</table>
