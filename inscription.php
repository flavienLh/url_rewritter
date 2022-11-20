<?php 
    require_once './config/config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['repassword']))
    {
        // contre la faille XSS(remplissage par le navigateur)
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);
        $repassword = htmlspecialchars($_POST['repassword']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT username, email, password FROM membre WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que fl.lhuissier@laposte.net et Fl.lhuissier@laposte.net soient deux compte différents 
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($username) <= 100){ // On verifie que la longueur du pseudo ne depasse pas 100 caractères
                if(strlen($email) <= 100){ // On verifie que la longueur du mail ne depasse pas 100 caractères
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $repassword){ // si les deux mot de passe saisis sont bien les mêmes

                            // On hash le mot de passe 
                            $password = password_hash($_POST['password'], PASSWORD_ARGON2ID);

                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO membre(username, email, password) VALUES(:username, :email, :password)');
                            $insert->execute(array(
                                'username' => $username,
                                'email' => $email,
                                'password' => $password,
                            ));
                            // On redirige avec le message de succès
                            header('Location:index.php?reg_err=success');
                            die();
                            // toutes les erreurs d'enregistrement possible avec un message a afficher
                        }else{ header('Location: login_register.php?reg_err=password'); die();} 
                    }else{ header('Location: login_register.php?reg_err=email'); die();}
                }else{ header('Location: login_register.php?reg_err=email_length'); die();}
            }else{ header('Location: login_register.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: login_register.php?reg_err=already'); die();}
    }