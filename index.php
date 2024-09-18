<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connexion.php';


    if($isset($response) && is_array($response)) {
        if(isset($response['shipment'])){
            echo "<p>".$response['shipment']['properties']['event']."</p>";
        }
        
    }
    ?>
</body>
</html>
<?php

