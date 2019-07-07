<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>My cinéma</title>
    <link rel="stylesheet" href="./my_cinema.css">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <section class="row blue">
        <div class="container head">
            <div class="row">
                <div class="col-md-12">
                    <h2>Bienvenue sur le Meilleur Cinéma de votre Vie !</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Barre de navigation -->
    <section id="menu" class="row violet">
        <div class="container">
            <div class="row">
                <div id="header" class="col-lg-8 col-md-12 col-sm-12">
                    <nav id="nav" class="navbar navbar-expand-sm navbar-dark">


                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="my_cinema_index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="recherche_membre_index.php">Membres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="seance_film_index.php">Projection</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Historique membre -->
    <div class="container head">
        <div class="row">
            <div class="col-md-12">
                <h3>Historique membre !</h3>
            </div>
            <?php include './implentation_sql.php'?>
            <?php include './avis.php'?>
            <div class="col-md-12">
                
                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th colspan="3">Historique de <?php $nom_memb = $_GET['nom'];$prenom_memb = $_GET['prenom']; echo $nom_memb . " " . $prenom_memb; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Titre</td>
                                <td>Date de visionnage</td>
                                <td>Avis</td>
                            </tr>
                            <tr>
                                <?php include './historique.php'?>
                            </tr>
                        </tbody>
                    </table>
                
            </div>
            <div class="col-md-12">
                <form method="POST" action="#">
                    <label for="choix_bieres">Entrez un titre de film :</label>
                    <input list="titre_film" type="text" name="titre_film">
                    <datalist id="titre_film">
                        <?php include './implentation.php'?>
                    </datalist>

                    <label for="start">Date de visionnage :</label>
                    <input type="date" name="date">

                    <input type="submit" name="search" value="Envoyer">
                </form>
            </div>
        </div>
    </div>
    <section>

    </section>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>