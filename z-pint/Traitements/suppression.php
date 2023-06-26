<?php 
require_once 'config.php';
if(isset($_POST['delete']) || isset($_GET['img_id']) || !empty($_GET['img_id'])){
$id = htmlspecialchars($_GET['img_id']);

$req = $bdd->prepare("DELETE FROM posts WHERE id = ?");
$req->execute(array($id));
header('Location: ../compte.php?reg_err=success_delete'); die();

}else{
header('Location: ../compte.php?reg_err=faill_delete'); die();  
};



