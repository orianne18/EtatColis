<?php
    require_once 'vendor/autoload.php';

    $env = Dotenv\Dotenv::createImmutable(__DIR__);
    $env->load();

    $trackingNumber = $_ENV['TRACKING_NUMBER'];
    $apiKey=$_ENV['API_KEY'];
    //Adresse de l'api suivi de colis
    $url = "https://api.laposte.fr/suivi/v2/idships/$trackingNumber?lang=fr_FR";

    //Initialisation 
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_CAINFO, 'C:\cert\cacert.pem');
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json',
        'X-Okapi-Key: ' . $apiKey
    ]);

    $response = curl_exec($ch);

    if ($response === false) {
        // En cas d'erreur, afficher l'erreur cURL
        echo 'Erreur cURL : ' . curl_error($ch);
    } /*else {
        // Si la requête a réussi, afficher la réponse
        echo 'Réponse de l\'API : ' . $response;
    }
*/
    curl_close($ch);

    $data = json_decode($response,true);
    //var_dump($response);

?>