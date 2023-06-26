<?php require_once 'Traitements/redirect.php'; ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
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
    <title>Contact</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
      rel="stylesheet"
    />
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
    <?php 
    include 'parties/header.php';
    ?>

<?php 
    require_once 'Traitements/config.php';

    $req = $bdd->prepare("SELECT email FROM utilisateurs WHERE nom = '".$_SESSION['user']."'");
    $req->execute();
    $rows = $req->fetch();
?>
    <!--================ End Header Area =================-->

    <!--================ Start banner Area =================-->
    <section class="banner-area relative">
      <div class="overlay overlay-bg"></div>
      <div class="banner-content text-center">
        <h1>Nous contacter</h1>
        
          Veuillez remplir le formulaire ci-dessous pour nous 
          <br />
          contacter.
        
      </div>
    </section>
    <!--================ End banner Area =================-->
 
    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap" style="margin-top:-37em;">
      <div class="container">
      <?php
            if (isset($_GET['reg_err'])) {
              $err = htmlspecialchars($_GET['reg_err']);

              switch ($err) {
                case 'success':
            ?>
                  <div class="alert alert-success">
                  Votre message à été envoyé avec succès.
                  </div>
            <?php
                  break;

                  case 'err_r':
                    ?>
                          <div class="alert alert-warning">
                          Erreur, Message non envoyé, veuillez réessayer.  
                          </div>
                    <?php
                          break;  
            }
        }
  ?>
        <div class="row">
          <div class="map-wrap" id="contactMap"></div>
          <div class="col-lg-4 d-flex flex-column address-wrap">
            <div class="single-contact-address d-flex flex-row">
              <div class="icon"><span class="lnr lnr-home"></span></div>
              <div class="contact-details">
                <h5>Yaoundé, Cameroun</h5>
                <p>Christian Zangue</p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon">
                <span class="lnr lnr-phone-handset"></span>
              </div>
              <div class="contact-details">
                <h5>(+237) 699 062 468</h5>
                <p><?php $date = time(); $date = date("d/m/Y,  H:i", $date ); echo $date; ?> <small>(Temps réel)</small></p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon"><span class="lnr lnr-envelope"></span></div>
              <div class="contact-details">
                <h5>christianzangue@gmail.com</h5>
                <p>Contactez-nous quand vous le souhaitez!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <form
              class="form-area contact-form text-right"
              action="Traitements/contact_us.php"
              id="myForm"
              method="POST"
            >
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input
                    name="nom"
                    placeholder="Nom"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Nom'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="text"
                    value="<?php echo $_SESSION['user'] ; ?>"
                  />

                  <input
                    name="email"
                    placeholder="Adresse email"
                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Adresse email'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="email"
                    value="<?php echo $rows['email'] ; ?>"
                  />

                  <input
                    name="sujet"
                    placeholder="Sujet"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Subject'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="text"
                  />
                </div>
                <div class="col-lg-6 form-group">
                  <textarea
                    class="common-textarea form-control"
                    name="message"
                    placeholder="Message"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Message'"
                    required=""
                    maxlength="255"
                  ></textarea>
                </div>
                <div class="col-lg-12">
                  <div class="alert-msg" style="text-align: left;"></div>
                  <button
                    class="primary-btn text-uppercase"
                    style="float: right;"
                    name="envoyer"
                  >
                    Envoyer
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End contact-page Area -->

    <!--================ Start Footer Area =================-->
    <?php include 'parties/footer.php';?>
    <!--================ End Footer Area =================-->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script
      type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"
    ></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
