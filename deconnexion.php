<?php
session_start();//prend la session qui est demarrer
$_SESSION['email'] = array();//place la session dans un tableau
unset($_SESSION["email"]);

if (ini_get("session.use_cookies")) 
    {
        setcookie(session_name(), '', time()-42000);
    }
     
    if(session_destroy()){

    header("Location: login.php");
    }
    else
    {
        echo"erreur";
    }
?>