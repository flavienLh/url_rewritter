<?php 
        /*
           Attention ! le host => l'adresse de la base de données et non du site !!
        */

    try 
    {
        $bdd = new PDO("mysql:host=localhost;dbname=switchurl;charset=utf8", "root", "");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
