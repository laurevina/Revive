<?php
require_once 'config.php'; // On inclu la connexion à la bdd
session_start();




//fin de la connexion a la base de donnees

//si on clique sur le  boutton ajouter
if (isset($_POST['poster'])) {
    $description = htmlspecialchars($_POST['description']);
    $categorie = htmlspecialchars($_POST['categorie']);
    $proprietaire = $_SESSION['user'];
    $date = time();
    $date = date("d/m/Y à H:i", $date );
    $id = htmlspecialchars($_POST['id']);

    if (!empty($description)  || !empty($categorie)) {
        //on inserre les informations dans les tables publications

        $req = $bdd->prepare('UPDATE posts SET description =?, categorie =?, date =? WHERE id = "'.$id.'"');

        $req->execute(array($description, $categorie, $date));

        //si les donnees on été bien inserrées on redirige avec le message suivant
        header('Location: ../update.php?reg_err=success'); die();
    } else {
        header('Location: ../update.php?reg_err=err_r'); die();
    }
    
}