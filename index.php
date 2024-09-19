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
   
    $code = "";
    $date = "";
    $label = "";

    $file = fopen("suivi.csv", "w");

    for($i = 0 ; $i<count($data["shipment"]["event"]) ; $i++){
        $code = $data["shipment"]["event"][$i]["code"];
        $date = $data["shipment"]["event"][$i]["date"];
        $label = $data["shipment"]["event"][$i]["label"];
       
        fwrite($file,$code.','.$date.','.$label."\n");
        }
    fclose($file);
  
    
    ?>
</body>
</html>
<?php

