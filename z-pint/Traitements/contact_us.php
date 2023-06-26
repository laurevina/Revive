<?php
require_once 'config.php'; // On inclu la connexion à la bdd
session_start();

//fin de la connexion a la base de donnees

//si on clique sur le  boutton ajouter
if (isset($_POST['envoyer'])) {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $sujet = htmlspecialchars($_POST['sujet']);
    $message = htmlspecialchars($_POST['message']);
    $date = time();
    $date = date("d/m/Y à H:i", $date );

    if (!empty($nom)  || !empty($email) || !empty($sujet) || !empty($message)) {
        //on inserre les informations dans les tables publications
$req = $bdd->prepare('INSERT INTO contact_us(nom, email, date, sujet, message) VALUES(:nom, :email, :date, :sujet, :message)');

$req->execute(array('nom' => $nom, 'email' => $email,'date' => $date, 'sujet' => $sujet, 'message' => $message));

        

        //si les donnees on été bien inserrées on redirige avec le message suivant
        header('Location: ../contact.php?reg_err=success'); die();
    } else {
        header('Location: ../contact.php?reg_err=err_r'); die();
    }
}