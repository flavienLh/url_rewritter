<?php
    require_once '../config/config.php';

    // récupère mon url que je veux modifier
    if(isset($_POST['ok'])){
    // récupére l'id pour supprimer le bon lien
    $ID = $_POST['id'];
    $upUrls = $_POST['url'];
    $random_url = "localhost/" .bin2hex(random_bytes(5));

    // Exécution de la requete pour mettre à jour une url en fonction de son identifiant dans la base de donnée
    $requete= ' UPDATE urls SET long_url=:long_url, short_url=:short_url WHERE ID=:ID';
    $recup = $bdd->prepare($requete); // prepare la requête
    $recup->bindValue(":long_url", $upUrls);
    // Remet la fonction qui permet de faire un url random pour ne plus avoir l'ancien dans le tableau
    $recup->bindValue(":short_url", $random_url);
    $recup->bindValue(":ID", $ID);
    $recup->execute();

    // redirection vers l'index
    header('location: ../index.php');
}

if(isset($_POST['cancel'])){
    // récupére l'id pour supprimer le bon lien
    $ID = $_POST['id'];
    // Supprime uniquement le liens selectionner
    $requete = 'DELETE FROM urls WHERE ID =:ID';
    $recup = $bdd->prepare($requete);
    $recup->bindValue(":ID", $ID);
    $recup->execute();
    
    header('location: ../index.php?');
}
/*
if($_POST['desactiver']){
    // récupére l'id pour desactiver le bon lien
    $ID = $_POST['id'];
    $string = '"<a href="ModifUrl.php?ID=<?= $url["ID"] ?>" class="text-light">modification et suppression, désactiver</a>"';
    $string = preg_replace('#<a href=(.*)>(.*)</a>#siU','',$string);
    echo $string;
    
    
    header('location: ../index.php?');
}
*/
?>