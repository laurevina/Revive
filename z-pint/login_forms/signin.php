<?php 
session_start();
if(isset($_SESSION['user'])){
  header('location: ../index.php');
} 
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url(images/bg-1.jpg);">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Inscriptions</h3>
                                </div>
                            </div>
                            <div>

                            </div>

                <div>
                <?php
                    if (isset($_GET['reg_err'])) {
                      $err = htmlspecialchars($_GET['reg_err']);

                      switch ($err) {
                        case 'success':
                    ?>
                          <div class="alert alert-success text-left">
                            <strong>Inscription réussie ! </strong>Connectez-vous pour continuer. <a href="login.php">Se connecter</a>
                          </div>
                        <?php
                          break;

                        case 'psd_court':
                        ?>
                          <div class="alert alert-danger text-left">
                            <strong>Erreur,</strong> mot de passe faible (8 caractères au-moins).
                          </div>
                        <?php
                          break;

                        case 'psd':
                        ?>
                          <div class="alert alert-danger text-left">
                            <strong>Erreur,</strong> mots de passe différents
                          </div>
                        <?php
                          break;

                        case 'email':
                        ?>
                          <div class="alert alert-danger text-left">
                            <strong>Erreur,</strong> email non valide
                          </div>
                        <?php
                          break;

                        case 'email_length':
                        ?>
                          <div class="alert alert-danger text-left">
                            <strong>Erreur,</strong> email trop long
                          </div>
                        <?php
                          break;

                        case 'nom_length':
                        ?>
                          <div class="alert alert-danger text-left">
                            <strong>Erreur,</strong> le nom est trop long ou le format est invalide (a-z, _ A-Z 0-9).
                          </div>
                        <?php

                          break;
                        case 'already':
                        ?>
                          <div class="alert alert-danger text-left">
                            <strong>Erreur,</strong> l'email ou le nom existe déjà.
                          </div>
                        <?php
                          break;

                        case 'form_vide':
                        ?>
                          <div class="alert alert-danger text-left">
                            <strong>Erreur,</strong> Veuillez remplir le formulaire avant de le soumettre!
                          </div>
                    <?php
                          break;
                      }
                    }
                    ?>
                </div>
                            <form action="../Traitements/inscription.php" class="signin-form" method="post">
                                <div class="form-group mb-3">
                                    <label class="label" for="name">Nom</label>
                                    <input type="text" class="form-control" name="nom">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Mot de passe</label>
                                    <input type="password" class="form-control" name="psd">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Confirmez le mot de passe</label>
                                    <input type="password" class="form-control" name="c-psd">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="inscrire">S'inscrire</button>
                                </div>
                                <div class="form-group d-md-flex">
                                </div>
                            </form>
                            <p class="text-center"><a href="login.php">Se connecter</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>