<?php
require_once 'config.php';
//sport
$req = $bdd->prepare("SELECT * FROM posts WHERE categorie ='sport' ORDER BY categorie");
$req->execute();
$rows = $req->fetchAll();
//musique
$req = $bdd->prepare("SELECT * FROM posts WHERE categorie ='musique' ORDER BY categorie");
$req->execute();
$rowm = $req->fetchAll(); 
//nature
$req = $bdd->prepare("SELECT * FROM posts WHERE categorie ='nature' ORDER BY categorie");
$req->execute();
$rown = $req->fetchAll();
//architecture
$req = $bdd->prepare("SELECT * FROM posts WHERE categorie ='architecture' ORDER BY categorie");
$req->execute();
$rowa = $req->fetchAll();
//voyage
$req = $bdd->prepare("SELECT * FROM posts WHERE categorie ='voyage' ORDER BY categorie");
$req->execute();
$rowv = $req->fetchAll();
//culture
$req = $bdd->prepare("SELECT * FROM posts WHERE categorie ='culture' ORDER BY categorie");
$req->execute();
$rowvc = $req->fetchAll();
//nourriture
$req = $bdd->prepare("SELECT * FROM posts WHERE categorie ='nourriture' ORDER BY categorie");
$req->execute();
$rowsnoun = $req->fetchAll();
