<?php

    require_once 'vendor/autoload.php';

    $env = Dotenv\Dotenv::createImmutable(__DIR__);
    $env->load();

    include 'connexion.php';
    include 'index.php';

    echo 1;

    ini_set('display_errors',1);
    ini_set('display_startup_errors', 1);
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
    $headers="De :".$from;

    if(mail($to,$subject,$message,$headers)){
        echo "L'email a été envoyé.";
    }else{
        echo "Erreur lors de l'envoi du mail";
    }

    
    
    

?>