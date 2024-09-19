<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etat colis</title>
</head>
<body>
    <?php
    include 'connexion.php';
    $shipment = json_encode($data["shipment"],JSON_PRETTY_PRINT);
    echo '<pre>';
    var_dump($data);
    //var_dump ($data['shipment']['timeline']);
    echo '</pre>';
    foreach($data['shipment']['timeline'] as $key => $value){
        "<p>Etat ".$key." : ".$value."</p>";
    }
    if(isset($response)) {
        //echo 'test1 passé';
        if(isset($data['shipment'])){
            echo 'test2 passé';
            //"<p>".$data['shipment']['status']['event']."</p>";
            
        }
        
        //echo 
    }
    ?>
</body>
</html>
<?php

