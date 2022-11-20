<?php 
session_start();
require_once('./config/config.php');

$id = $_GET["ID"];
$requete = "SELECT ID,long_url FROM urls WHERE ID=".$id;
$result = $bdd->query($requete);
 
// Renvoi de l'enregistrement sous forme d'un objet
$url = $result->fetch(PDO::FETCH_ASSOC);

?>
<?php include('./html/header.php')?>

<header>
  <?php include('./html/navbar.php') ?>
</header>
<body class="bg-secondary">
    <form action="./ajouter_url/UpdateUrls.php" method="POST">
        <input id="id" name="id" type="hidden" value="<?php echo $url['ID'];?>">       
        <div class="form-group text-center text-light offset-3 w-50">
            <label for="url">modification d'url non raccourcis</label>
            <input type="text" id="url" class="form-control" name="url" placeholder="Url non raccourcis" >
        </div>
        <button class="text-center offset-5" type="submit" id="ok" name="ok" value="Valider la modification">modifier</button>
        <button type="submit" id="sup" name="cancel" value="supprimer">supprimer</button>
        <button type="submit" id="desactiver" name="desactiver" value="desactiver">désactiver</button>
    </form>
    <br>
</body>
<?php require_once('./html/Footer.php') ?>