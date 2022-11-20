<?php 
session_start();

require_once './config/config.php'; // On inclut la connexion à la base de données


if(isset($_POST['connexion'])){ //si le bouton connexion a été appelé
    $email = $_POST['emailconnect'];//initialisation de la variable "$email" qui appelle "emailconnect"
    $password = $_POST['passwordconnect'];//initialisation de la variable "$password" qui appelle "passwordconnect"
    

    $sql = "SELECT * FROM membre WHERE email = '$email'"; //prend tout dans la table membre quand l'email renseigner est egal a un email dans la base 
    $result = $bdd->prepare($sql);//preparation de la requete sql
    $result->execute();//execution de la requête 
    

    if($result->rowCount() > 0){ //retourne le nombre de ligne affecté par le resultat et il faut qu'il sois supérieur a 0

        $data = $result->fetchAll();//recupère les lignes 
        if(password_verify($password,$data[0]["password"])){ //verifie le mot de passe
            
            
            $_SESSION['email'] = $email; //initialise une session avec l'email
            header("location: index.php?email=".$email);//redirection vers l'index avec la session email
            
        }else{
            header('Location: login_register.php?login_err=emailORpassword'); die(); }
        

    }else{//sinon affiche l'erreur 
        header('Location: login_register.php?login_err=already');
    }


}
