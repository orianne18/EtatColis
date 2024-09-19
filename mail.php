<?php
    require 'connexion.php';
    require 'index.php';

    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $from=$_ENV['FROM'];
    $to=$_ENV['TO'];

    $subject="Suivi de votre colis.";

    if($code === "DI1"){
        $message="Votre colis a été livré !";
        $mail->addAttachment('/images/happy.jpg');
    } else{
        $message="Le colis n°".$_ENV['TRACKING_NUMBER']." est toujours en cours de livraison.";
    }
    

?>