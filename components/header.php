<?php session_start() ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/form.css">
    </head>
    <body>
        <header>
            <?php require_once './components/menu.php' ?>
        </header>
        <main>