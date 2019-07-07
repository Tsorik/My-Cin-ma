<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>My cinéma</title>
    <link rel="stylesheet" href="./my_cinema.css">
    <script src="script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                                <a class="nav-link" href="#">Membres</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./seance_film_index.php">Projection</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
<!-- Recherche de membre -->
        <div class="container head">
            <div class="row">
                <div class="col-md-12">
                    <h3>Recherche de membre !</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Formulaire de recherche de membre -->
                    <form method="POST" action="recherche_membre_index.php"> 
                        <!-- Par nom -->
                        <label for="nom_film">Nom du membre : </label>
                        <input type="text" name="nom" id="nom"><br><br>
                        <!-- Par prenom -->
                        <label for="nom_film">Prenom du membre : </label>
                        <input type="text" name="prenom" id="prenom"><br><br>
                        <!-- envoie -->
                        <input type="submit" name="search" value="Rechercher">
                    </form>
                    <div class="col-md-12">
                        <?php include './recherche_nom.php'?>
                    </div>
                </div>
            </div>
        </div>
    <section>
        
    </section>


    <script>$(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "pagingType": "simple" // "simple" option for 'Previous' and 'Next' buttons only
  });
  $('.dataTables_length').addClass('bs-select');
});
    $(document).ready(function () {
  $('#dtBasicExample').DataTable({
    "paging": false // false to disable pagination (or any other option)
  });
  $('.dataTables_length').addClass('bs-select');
});</script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>