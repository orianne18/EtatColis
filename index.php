<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etat colis</title>
</head>
<body>
    <?php
    
    require_once 'vendor/autoload.php';  

    $env = Dotenv\Dotenv::createImmutable(__DIR__);
    $env->load();
        
    echo '<h1>Suivi du colis n°'.$_ENV["TRACKING_NUMBER"]."!</h1>";

    include 'connexion.php';
    include 'mail.php';

    ?>
</body>
</html>
<?php

