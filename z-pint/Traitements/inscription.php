<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd
if(isset($_POST['inscrire'])){
    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['psd']) && !empty($_POST['c-psd']))
    {
        // on recupère les informations entrées par l'utilisateur
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
        $psd = htmlspecialchars($_POST['psd']);
        $c_psd = htmlspecialchars($_POST['c-psd']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT nom, email, psd FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $check = $bdd->prepare('SELECT nom, email, psd FROM utilisateurs WHERE nom = ?');
        $check->execute(array($nom));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($nom) <= 10 && preg_match('/^[a-zA-Z0-9_]+$/', $nom)){ // On verifie que la longueur du nom <= 10 et le format du nom entré
                if(strlen($email) <= 30){ // On verifie que la longueur du mail <= 30
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email a le bon format abc@abc.abc
                        if(($psd === $c_psd)){ // si les deux mdp saisis sont bons
                            if(strlen($psd) >= 8 || strlen($psd) <= 15){ // on verifie que le mot de passe est "strong" et n'est pas trop long

                            $psd = password_hash($psd, PASSWORD_BCRYPT); // on crypte le mot de passe avant de le stocker en bdd 
                           
                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO utilisateurs(nom, email, psd) VALUES(:nom, :email, :psd)');
                            $insert->execute(array(
                                'nom' => $nom,
                                'email' => $email,
                                'psd' => $psd,
                            ));
                            // On redirige avec le message de succès
                            header('Location: ../login_forms/signin.php?reg_err=success');
                            die();
                            }else{ header('Location: ../login_forms/signin.php?reg_err=psd_court'); die();}
                        }else{ header('Location: ../login_forms/signin.php?reg_err=psd'); die();}
                    }else{ header('Location: ../login_forms/signin.php?reg_err=email'); die();}
                }else{ header('Location: ../login_forms/signin.php?reg_err=email_length'); die();}
            }else{ header('Location: ../login_forms/signin.php?reg_err=nom_length'); die();}
        }elseif($row > 0){ header('Location: ../login_forms/signin.php?reg_err=already'); die();}
    }if(empty($_POST['nom']) or empty($_POST['email']) or empty($_POST['psd']) or empty($_POST['c-psd'])){
        header('Location: ../login_forms/signin.php?reg_err=form_vide'); die(); 
    }
}
