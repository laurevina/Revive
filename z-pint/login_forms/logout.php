<?php 
session_start();
if(!isset($_SESSION['user'])){
  header('location: ../index.php');
} ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/fav.png" />
    <!-- Author Meta -->
    <meta name="author" content="CodePixar" />
    <!-- Meta Description -->
    <meta name="description" content="" />
    <!-- Meta Keyword -->
    <meta name="keywords" content="" />
    <!-- meta character set -->
    <meta charset="UTF-8" />
    <!-- Site Title -->
    <title>logout</title>

    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
      rel="stylesheet"
    />
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="../css/linearicons.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/magnific-popup.css" />
    <link rel="stylesheet" href="../css/nice-select.css" />
    <link rel="stylesheet" href="../css/owl.carousel.css" />
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="../css/themify-icons.css" />
    <link rel="stylesheet" href="../css/main.css" />
  </head>

  <body>
    <!--================ Start Header Area =================-->
    <?php require_once '../Traitements/config.php';?>
<header class="header-area">
      <div class="container">
        <div class="header-wrap">
          <div
            class="header-top d-flex justify-content-between align-items-lg-center navbar-expand-lg"
          > 
            <div class="col-5 text-lg-center mt-2 mt-lg-0">
              <div class="card-title" style="font-size: 1em;">
              <?php if(isset($_SESSION['user'])):?>
               <br> 
              <?php echo "Vous êtes connecté(e) : ".$_SESSION['user'].",<a href='compte.php'> Voir le profil</a>" ;?>
              <br>
              <?php endif ?>  
              </div>
            </div>
            <nav class="col navbar navbar-expand-lg justify-content-end">
              <!-- Navbar links -->
              <div
                class="collapse navbar-collapse menu-right"
                id="collapsibleNavbar"
              >
                <ul class="navbar-nav justify-content-center w-100">
              
                  <!-- Dropdown -->
                  <!-- <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      id="navbardrop"
                      data-toggle="dropdown"
                    >
                      Pages
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="elements.php">Elements</a>
                    </div>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link" href="../index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../category.php">Categories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../poster.php">Poster</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../search.php">Rechercher</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../contact.php">Contacts</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!--================ End Header Area =================-->

    <!--================ Start banner Area =================-->
    <section class="banner-area relative">
      <div class="overlay overlay-bg"></div>
      <div class="banner-content text-center">    
		<?php if(isset($_SESSION['user'])) :?>
            <form action="../Traitements/confirm.php" method="POST">
              <div class="card-text" >
                <h3 style="color:white;">Confirmez-vous la déconnecxion ? <?php echo $_SESSION['user'] ;?></h3> 
              </div>
              <br>
            <button type="submit" name="oui" class="btn btn-danger"> Oui </button>
            <button type="submit" name="non" class="btn btn-secondary ">Non</button>
            </form>
		<?php endif ;?>
        
      </div>
    </section>
    <!--================ End banner Area =================-->

	<!-- Start Sample Area -->
	<!-- End Align Area -->

	<!--================ Start Footer Area =================-->
	<footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>A propos de nous</h6>
              <p>
                Notre site est un univers de découverte de photos <br>
                pour l'Afriuque. 
              </p>
            </div>
          </div>
          <div class="col-lg-4  col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Donner une info</h6>
              <p>Restez connecté à nous</p>
              <div class="" id="mc_embed_signup">
  
                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                 method="get" class="form-inline">
  
                  <div class="d-flex flex-row">
  
                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                     required="" type="email">
  
  
                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                    <div style="position: absolute; left: -5000px;">
                      <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                    </div>
  
                    <!-- <div class="col-lg-4 col-md-4">
                          <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                        </div>  -->
                  </div>
                  <div class="info"></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-3  col-md-6 col-sm-6">
            <div class="single-footer-widget mail-chimp">
              <h6 class="mb-20">Notre Insta</h6>
              <ul class="instafeed d-flex flex-wrap">
                <li><img src="../img/instagram/i1.jpg" alt=""></li>
                <li><img src="../img/instagram/i2.jpg" alt=""></li>
                <li><img src="../img/instagram/i3.jpg" alt=""></li>
                <li><img src="../img/instagram/i4.jpg" alt=""></li>
                <li><img src="../img/instagram/i5.jpg" alt=""></li>
                <li><img src="../img/instagram/i6.jpg" alt=""></li>
                <li><img src="../img/instagram/i7.jpg" alt=""></li>
                <li><img src="../img/instagram/i8.jpg" alt=""></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="single-footer-widget">
              <h6>Suivez-nous</h6>
              <p>Nos réseaux sociaux</p>
              <div class="footer-social d-flex align-items-center">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
          <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | christianzangue@gmail.com
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div>
      </div>
    </footer>
	  <!--================ End Footer Area =================-->
  
	  <script src="../js/vendor/jquery-2.2.4.min.js"></script>
	  <script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
		integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
		crossorigin="anonymous"
	  ></script>
	  <script src="../js/vendor/bootstrap.min.js"></script>
	  <script src="../js/owl.carousel.min.js"></script>
	  <script src="../js/jquery.sticky.js"></script>
	  <script src="../js/jquery.tabs.min.js"></script>
	  <script src="../js/parallax.min.js"></script>
	  <script src="../js/jquery.nice-select.min.js"></script>
	  <script src="../js/jquery.ajaxchimp.min.js"></script>
	  <script src="../js/jquery.magnific-popup.min.js"></script>
	  <script
		type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"
	  ></script>
	  <script src="../js/bootstrap-datepicker.js"></script>
	  <script src="../js/main.js"></script>
	</body>
  </html>