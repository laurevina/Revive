<?php
require_once 'config.php';
if (isset($_POST['telecharger'])) {
    $img = htmlspecialchars($_GET['img']);
    $url = '../images_publiees/' . $img . '';
    $fichier_nom = basename($url);
    $fichier_contenu = file_get_contents($url);
    $dossier_enregistrement = "../Telechargement/";

    if (file_put_contents($dossier_enregistrement . $fichier_nom, $fichier_contenu)) {
        header('Location: ../index.php?reg_err=success'); die();
    } else {
        header('Location: ../index.php?reg_err=faill'); die();
    }
};

if (isset($_POST['categorie'])) {
    $img = htmlspecialchars($_GET['img']);
    $url = '../images_publiees/' . $img . '';
    $fichier_nom = basename($url);
    $fichier_contenu = file_get_contents($url);
    $dossier_enregistrement = "../Telechargement/";

    if (file_put_contents($dossier_enregistrement . $fichier_nom, $fichier_contenu)) {
        header('Location: ../category.php?reg_err=success'); die();
    } else {
        header('Location: ../category.php?reg_err=faill'); die();
    }
}

