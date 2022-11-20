<?php
$title = "Projet 1 🔥Dashboard🔥";
require_once './components/header.php';

// need to be login to go on this page
require './functions/session.php';

?>

<div class="card">
    <p>Welcome back <strong><?= $_SESSION['username'] ?></strong>.</p>
</div>

<?php require_once './components/footer.php' ?>