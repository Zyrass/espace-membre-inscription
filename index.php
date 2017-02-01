<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Mon super site !</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myMenu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Espace-membre.dev</a>
                    <p class="navbar-text text-primary">[section : home]</p>
                </div>

                <div class="collapse navbar-collapse" id="myMenu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item">
                            <a class="nav-link" href="compte.php">Compte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="deconnexion.php">Déconnexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="connexion.php">Connexion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <div class="container">
                <h1 class="text-center">Ma page d'accueil</h1>
                <hr>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="jumbotron">
                            <h2>Présentation du contenu</h2>
                            <hr>
                            <p class="lead">Basé sur le tutoriel de Steven Sil sur tuto.com, nous allons nous entraîner à coder un espace membre.</p>

                            <p>Les couleurs sont modifiés ainsi qu'une adaptation du code pour que ce soit compatible avec bootstrap 3.</p>

                            <div class="alert alert-info">
                                <p>A savoir que de base Steven utilise la version 4.0.0 de bootstrap qui est au jour d'aujourd'hui encore en Alpha mais le numéro de version : 4.0.6</p>
                            </div>
                            <hr>
                            <small>si cette formation vous intéresse voici le lien : <a href="https://fr.tuto.com/php/php-formation-complete-php,64171.html" target="_blank">Tuto PHP : Formation complète avec Php</a></small>
                        </div>
                    </div>
                </div>
            </div>    
        </main>
        
        <?php include 'include/footer.php' ?>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>
