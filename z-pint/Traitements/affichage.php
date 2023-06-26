<?php 
require_once 'config.php';

$req = $bdd->prepare("SELECT * FROM posts ORDER BY id DESC");
$req->execute();
$rows = $req->fetchAll();