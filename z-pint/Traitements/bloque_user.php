<?php
require_once 'config.php';
if (isset($_POST['update']) || isset($_GET['id_user_blq'])) {
    $id = htmlspecialchars($_GET['id_user_blq']);
    $etat = 'bloqué';

    $req = $bdd->prepare('UPDATE utilisateurs SET etat =? WHERE id = "'.$id.'"');

    $req->execute(array($etat));
    header('Location: ../gestion.php?reg_err=success_blq');
    die();
} else {
    header('Location: ../gestion.php?reg_err=faill_blq');
    die();
};