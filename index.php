<?php 
session_start();
require_once('./config/config.php');

$stmt = $bdd->query("SELECT * FROM urls");
$urls = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


  <?php include('./html/header.php')?>

  <header>
    <?php include('./html/navbar.php') ?>
  </header>
  <body class="bg-secondary">  
    <?php if(isset($_SESSION['email'])){ ?>
    <div class="p-3 mb-2 bg-secondary text-dark">
      <form class="" action="./ajouter_url/addurl.php" autocomplete="off" method="POST">
        <div class="form-group text-center text-light offset-3 w-50">
            <label for="long_url">Ajout d'un url</label>
            <input type="text" id="long_url" class="form-control" spellcheck="false" name="long_url" placeholder="Entrer une url http ou https://" required>
        </div>
        <button type="submit" class="offset-6">raccourcir</button>
      </form>
      <br>
      <div class="row">
        <div class="col">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered bg-secondary">
                <div class="urls-area">
                  <thead class="title urls">
                    <tr class="text-light">
                      <th><b>URL</b></th>
                      <th><b>URL raccourcis</b></th>
                      <th><b>Nombre de clic</b></th>
                      <th><b>Cliquer pour modifier ou supprimer, désactiver</b></th>
                    </tr>
                  </thead>
                </div>
              <tbody class="urls">
                <!-- Boucle qui permet de récuperer les infos d'une table et les afficher dans un tableau -->
                <?php foreach ($urls as $url) : ?>
                  <?// $random_url = "http://localhost/r?c=" . random_bytes(5);?>
                  <div class="url">                    
                    <tr>
                      <td class="long_url">
                          <a class="text-light" id="click" class="click" href="<?= $url['long_url']; ?>" target="_blank"><?= $url['long_url']; ?></a>
                      </td>
                      <td class="short_url">
                          <a class="text-light" id="click" class="click" href=<?= $url['long_url'] ?> target="_blank"><?= $url['short_url'] ?></a>
                      </td>
                      <td>
                          <a class="text-light" href="<?= $url['click']; ?>" target="_blank"><?= $url['click']; ?></a>
                      </td>
                      <td>
                        <a href="ModifUrl.php?ID=<?= $url['ID'] ?>" class="text-light">modification et suppression, désactiver</a>
                      </td>
                    </tr>
                  </div>
                  <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
          <form action="./ajouter_url/delete.php" method="POST">
            <fieldset class="row">
               <legend class="text-light text-center"> Supression de tous le tableau </legend>
                  <div class="form-group offset-6"> 
                     <button type="submit" id="sup" name="cancel" value="supprimer">Clear</button>
                  </div>
              </fieldset>
          </form>
      </div>
    </div>
    <script src="script.js"></script>
    <?php }else{ ?>
      <div class="text-light">
        <h1>Pour voir le tableau veuillez vous connecter :</h1>
        <p> Lorsque vous serez connectez, vous aurais accès à un tableau qui contient :</p>
        <ul>
          <li>
            Url original
          </li>
          <li>
            Url Raccourcis
          </li>
          <li>
            Ajouter un Url
          </li>
          <li>
            Modifier, supprimer un url ou supprimer tous les urls
          </li>
      </ul>
      </div>
    <?php }?>
  </body>
<?php require_once('./html/Footer.php') ?>