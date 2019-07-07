<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h2>Affichage de texte avec PHP</h2>
       
        <p>
            Cette ligne a été écrite entièrement en HTML.<br />
        </p>
   
<?php
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=BDD;charset=utf8', 'root', 'password');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT titre FROM film');
//echo var_export($reponse, true);
while ($donnees = $reponse->fetch())
{
 echo $donnees['titre'] . '<br />';
}

$reponse->closeCursor();

?>     
    </body>
</html>