<!DOCTYPE html>
<html lang="fr">
      <head>
        <meta charset="utf-8">
        <title>Mon compte</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,700,300">
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
                    <p class="navbar-text text-primary">[section : compte]</p>
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
            <div class="container profil">
                <h1 class="text-center">Mon compte</h1>
                <hr>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="well text-center">
                            <blockquote class="blockquote-reverse">
                                <p>Sur votre compte, vous pouvez changer le mot de passe ou votre image de profil.</p>
                            </blockquote>
                            <hr>
                            <a href="avatar.php" class="btn btn-primary">Changer mon image de profil</a>
                            <a href="password.php" class="btn btn-default">Changer mon mot de passe</a>
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
