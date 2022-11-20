<?php
require_once('../config/config.php');

    $supprimer=$_POST['cancel'];
    // Supprime tous le contenue de la table urls
    $requete = 'DELETE FROM urls WHERE urls.ID = ID';
    $sup = $bdd->prepare($requete);
    $sup -> execute();
    
    header('location: ../index.php?');
?>