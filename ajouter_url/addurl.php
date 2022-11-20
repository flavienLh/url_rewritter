<?php
require_once '../config/config.php';


$url = $_POST['long_url'];
// convertis une url en une aléatoire
$random_url = "localhost/" .bin2hex(random_bytes(5));
// Permet de faire la création d'une url aléatoire en rentrant une url basique
$query = "INSERT INTO urls (long_url, short_url) VALUES (:long_url, :short_url)";
$stmt = $bdd->prepare($query);
$param = array(
    "long_url" => $url,
    "short_url" => $random_url,
);

$resultat = $stmt->execute($param);
header('location: ../index.php?');
?>