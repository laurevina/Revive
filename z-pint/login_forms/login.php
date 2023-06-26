<?php
session_start();
if (isset($_SESSION['user'])) {
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
									<h3 class="mb-4">Connexion</h3>
								</div>
							</div>
							<div>

							</div>
							<div>
								<?php
								if (isset($_GET['login_err'])) {
									$err = htmlspecialchars($_GET['login_err']);

									switch ($err) {
										case 'blq':
								?>
											<div class="alert alert-danger">
												Votre compte a été bloqué par les administrateurs de ce système
											</div>
										<?php
											break;
										case 'psd':
										?>
											<div class="alert alert-danger">
												<strong>Erreur,</strong> mot de passe incorrect.
											</div>
										<?php
											break;

										case 'email':
										?>
											<div class="alert alert-danger">
												<strong>Erreur,</strong> email incorrect.
											</div>
										<?php
											break;

										case 'f_vide':
										?>
											<div class="alert alert-danger">
												<strong>Erreur,</strong> Remplissez le formulaire avant de le soumettre.
											</div>
										<?php
											break;

										case 'no_account':
										?>
											<div class="alert alert-danger">
												<strong>Erreur,</strong> compte non existant.
											</div>
								<?php
											break;
									}
								}
								?>
							</div>
							<form action="../Traitements/connexion.php" class="signin-form" method="post">
								<div class="form-group mb-3">
									<label class="label" for="email">Email</label>
									<input type="email" class="form-control" name="email">
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Mot de passe</label>
									<input type="password" class="form-control" name="psd">
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="connecter">Se connecter</button>
								</div>
								<div class="text-center">
									<a href="#">Mot de passe oublié ?</a>
								</div>
							</form>
							<p class="text-center">Pas encore membre? <a href="signin.php">S'inscrire</a></p>
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