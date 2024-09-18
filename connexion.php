<?php

    //Adresse de l'api suivi de colis
    $url = "https://api.laposte.fr/suivi/v2/idships/6A58894858306";

    //Initialisation 
    $ch = curl_init();

    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response,true);
    var_dump($response);

?>