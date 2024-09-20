<?php
    include 'connexion.php';

    $code = ""; //code du statut
    $date = ""; //date de l'événement
    $label = ""; //libelle du statut


    $file = fopen("suivi.csv", "w"); //ouverture du fichier en mode écriture

    //ajoute pour chaque événement une ligne dans le fichier avec code, date et libellé
    for($i = 0 ; $i<count($data["shipment"]["event"]) ; $i++){
        $code = $data["shipment"]["event"][$i]["code"];
        $date = $data["shipment"]["event"][$i]["date"];
        $label = $data["shipment"]["event"][$i]["label"];
       
        fwrite($file,$code.','.$date.','.$label."\n");
        }
    fclose($file); //fermeture du fichier

    
?>