<!DOCTYPE html>
<html lang="fr">
      <head>
        <meta charset="utf-8">
        <title>Changer d'avatar</title>
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
                    <p class="navbar-text text-primary">[section : avatar]</p>
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
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h1 class="text-center">Changer d'avatar</h1>
                        <hr>
                        <div class="well">
                            <div class="center-block">
                                <img src="" alt="avatar" class="img-circle img-fluid">
                            </div>
                            <form action="avatar.php" method="post" enctype="multipart/form-data">
                                <input type="file" name="avatar" class="form-control-file">
                                <input type="submit" class="btn btn-primary btn-block" value="Changer d'avatar">
                            </form>
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
