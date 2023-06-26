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
  <title>Revive</title>

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
  <section>
    <?php
    require_once 'Traitements/config.php';
    if (isset($_SESSION['user'])) {
      if (isset($_POST['search']) || !empty($_POST['search']) || isset($_POST['var']) || !empty($_POST['var'])) {

        $var = htmlspecialchars($_POST['var']);
        $req = $bdd->prepare('SELECT * FROM posts WHERE categorie LIKE "%' . $var . '%" OR proprietaire  LIKE "%' . $var . '%" OR description  LIKE "%' . $var . '%"' );
        $req->execute();
        $rows = $req->fetchAll();
      };
    }

    ?>
    <div class="container" style="margin-left:25em; margin-top:15em;">
      <form method="POST">
      <button type="submit" class="btn btn-secondary  mb-1" name="search" style="display: inline;">Rechercher</button>
        <input type="search" class="form-control" name="var" placeholder="Az..." style="display: inline; max-width:60%;">
      </form>
    </div>
    
  </section>
  <!--================ Start banner Area =================-->

  <!--================ End banner Area =================-->
  <?php
  if (isset($_GET['reg_err'])) {
    $err = htmlspecialchars($_GET['reg_err']);

    switch ($err) {
      case 'success':
  ?>
        <script>
          alert("Image téléchargée!");
        </script>
      <?php
        break;
      case 'faill':
      ?>
        <script>
          alert("Erreur lors du téléchargement, veuillez réessayer.");
        </script>
  <?php
    }
  }
  ?>
  <!--================ Start Blog Post Area =================-->
  <section class="blog-post-area section-gap relative">
    <div class="container">
      <?php if (isset($_POST['search'])) : ?>
        <?php if ($var = $rows) : ?>
          <?php if (isset($_POST['var']) || !empty($_POST['var'])) {
            $var = htmlspecialchars($_POST['var']);
          }
          ?>
          <div class="conatiner">
            <div class="alert alert-success">
              Resultat(s) de la recherche <u><strong>'<?=$var; ?>'</strong></u>
            </div>
          </div>
        <?php else : ?>
          <?php if (isset($_POST['var']) || !empty($_POST['var'])) {
            $var = htmlspecialchars($_POST['var']);
          }
          ?>
          <div class="conatiner">
            <div class="alert alert-danger mb-5">
              Aucun resultat(s) pour la recherche <u><strong>'<?=$var;?>'</strong></u>
            </div>
          </div>
        <?php endif ?>
      <?php endif ?>
      <?php if (isset($_POST['search'])): ?>
        <?php if ($var != ''): ?>
        <?php foreach ($rows as $row) : ?>
          <div class="single-amenities">
            <div class="amenities-thumb">
              <img class="img-fluid w-100" style="position:bottom;" src="images_publiees\<?= $row['img']; ?>" alt="" />
            </div>
            <div class="amenities-details">
              <h5>
                Catégorie : <?= $row['categorie']; ?>
              </h5>
              <h6>
                Description
              </h6>
              <p class="mt-1">
                <?= $row['description']; ?>
              </p>

              <div class="d-flex justify-content-between mt-20">
                <form action="Traitements/telechargement.php?img=<?= $row['img']; ?>" method="POST">
                  <div>
                    <button type="download" class="blog-post-btn" name="categorie">
                      télécharger <span class="ti-download"></span>
                    </button>
                  </div>
                </form>
                <div class="category">
                  <span class="ti-calendar"> Le : <?= $row['date']; ?></span>
                  <span class="ti-user mr-1"> par : <?= $row['proprietaire']; ?></span>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif ?>
      <?php endif ?>
    </div>
    </div>
  </section>

  <!--================ End Blog Post Area =================-->
  <?php include 'parties/footer.php'; ?>
  <!--================ Start Footer Area =================-->

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