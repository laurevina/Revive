<?php require_once 'Traitements/redirect.php'; ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png" />
  <!-- Author Meta -->
  <meta name="author" content="CodePixar" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Elements</title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i" rel="stylesheet" />
  <!--
			CSS
			============================================= -->
  <link rel="stylesheet" href="css/linearicons.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/nice-select.css" />
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="css/themify-icons.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <!--================ Start Header Area =================-->
  <?php include 'parties/header.php'; ?>
  <!--================ End Header Area =================-->

  <!--================ Start banner Area =================-->
  <section class="banner-area relative">
    <div class="overlay overlay-bg"></div>
    <div class="banner-content text-center">
      <?php if (isset($_SESSION['user'])) : ?>
        <h1>Modifier un post</h1>
      <?php endif; ?>

    </div>
  </section>
  <!--================ End banner Area =================-->

  <!-- Start Sample Area -->
  <section>
    <div class="container mt-3">
      <div class="form-group">
        <form action="Traitements/edit.php" method="post" enctype="multipart/form-data">
          <div>
            <?php
            
            if (isset($_GET['reg_err'])) {
              $err = htmlspecialchars($_GET['reg_err']);

              switch ($err) {
                case 'err_r':
            ?>
                  <div class="alert alert-danger">
                    <strong>Erreur! </strong>Votre image n'a pas été modifiée. Réessayez.
                  </div>
                <?php
                  break;

                case 'err_ri':
                ?>
                  <div class="alert alert-danger">
                    <strong>Erreur! </strong>Votre image est introuvable.
                  </div>
                <?php
                  break;
                case 'err_rv':
                ?>
                  <div class="alert alert-danger">
                    <strong>Erreur! </strong>Votre image est trop volumineuse.
                  </div>
                <?php
                  break;
                case 'err_rq':
                ?>
                  <div class="alert alert-danger">
                    <strong>Erreur! </strong>La définition de votre image n'est pas de bonne qualité (50Ko minimum).
                  </div>
                <?php
                  break;
                case 'err_re':
                ?>
                  <div class="alert alert-danger">
                    <strong>Erreur! </strong>Extensions autorisées : PNG, JPG, JPEG.
                  </div>
                <?php
                  break;
                case 'err_rt':
                ?>
                  <div class="alert alert-danger">
                    <strong>Erreur! </strong>Problème lors du téléchargement de l'image, veuillez réessayer.
                  </div>
            <?php
                  break;
              }
            }
            ?>
            <?php
            if (isset($_GET['reg_err'])) {
              $err = htmlspecialchars($_GET['reg_err']);

              switch ($err) {
                case 'success':
            ?>
                  <div class="alert alert-success">
                    <strong>Réussie! </strong>Votre post a bien été modifiée. <a href="compte.php"> Voir</a>
                  </div>
            <?php
                  break;

            }
        }
            ?>
          </div>
          <div class="card-title">
            Description du post :
          </div>
          <textarea name="description" class="form-control"></textarea>
          <br>
          <div class="card-title">
            Selectionnez une catégorie :
          </div>
          <select name="categorie" class="form-control">
            <option value="sport">Sport</option>
            <option value="musique">Musique</option>
            <option value="nature">Nature</option>
            <option value="nourriture">Nourriture</option>
            <option value="architecture">Architecture</option>
            <option value="voyage">Voyage</option>
            <option value="culture">Culture</option>
          </select>
          <br><br><br><br>
          <div class="container"> 
            <button type="submit" class="genric-btn primary e-large" name="poster" style="float:right;">Modifier</button>
          </div>
          <input type="hidden" name="id" value="<?php echo $err ;?>">
        </form>
      </div>
    </div>
  </section>
  <br><br><br><br>
  <!-- End Align Area -->

  <!--================ Start Footer Area =================-->
  <?php include 'parties/footer.php'; ?>
  <!--================ End Footer Area =================-->

  <script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.tabs.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/main.js"></script>
</body>

</html>