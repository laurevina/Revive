<?php 
require_once 'config.php';
if(isset($_POST['delete']) || isset($_GET['mess_id']) || !empty($_GET['mess_id'])){
$id = htmlspecialchars($_GET['mess_id']);

$req = $bdd->prepare("DELETE FROM contact_us WHERE id = ?");
$req->execute(array($id));
header('Location: ../Message.php?reg_err=success_delete'); die();

}else{
header('Location: ../Message.php?reg_err=faill_delete'); die();  
};
