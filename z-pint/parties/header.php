<?php require_once 'Traitements/config.php';?>
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
              <form method="POST">
              <?php if ($_SESSION['user'] == 'Admin' ):?><a href="gestion.php"><div> Gérer les utilisateurs</div> </a> <?php  endif?>
                <a href="login_forms/logout.php">Se déconnecter ?</a>
              </form> 
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
                    <a class="nav-link" href="index.php">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="category.php">Categories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="poster.php">Publier</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="search.php">Rechercher</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contacts</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>