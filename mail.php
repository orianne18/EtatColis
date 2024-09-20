<?php

    require_once 'vendor/autoload.php';
    include 'connexion.php';
    include 'fichier.php';
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    
    $env = Dotenv\Dotenv::createImmutable(__DIR__);
    $env->load();

    try {
        $mail = new PHPMailer (true);
        $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = $_ENV["HOST"];
    $mail->Port = $_ENV["PORT"];
    $mail->Username = $_ENV["FROM"];
    $mail->Password = $_ENV["PASSWORD"];
    $mail->SMTPSecure = $_ENV["MAIL_ENCRYPTION"];

    $from=$_ENV['FROM'];
    $to=$_ENV['TO'];
    $subject="Suivi de votre colis.";
    $message="";

    if($code === "DI1"){ //code DI1 : colis distribué
        $message="Votre colis a été livré !";
        $mail->addAttachment('/images/happy.jpg');
        
    } else{
        $message="Le colis n°".$_ENV['TRACKING_NUMBER']." est toujours en cours de livraison.";
    }


    $mail->setFrom($from);
    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if($mail->send()){
        echo "L'email a été envoyé.";
    }else{
        echo "Erreur lors de l'envoi du mail";
    }
    } catch (Exception $e) {
            echo "Mailer Error: ".$e->getMessage();
    }

    
?>