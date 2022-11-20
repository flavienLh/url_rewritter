<?php 
require_once '../config/config.php';


$click = $_POST['click'];
$ID = $_POST['id'];
$query = "UPDATE urls SET click=:click+1 WHERE ID=:ID";
$stmt = $bdd->prepare($query);
$recup->bindValue(":click", $click);
$recup->bindValue(":ID", $ID);
$recup->execute();
var_dump($recup);
exit;
header('location: index.php');
?>