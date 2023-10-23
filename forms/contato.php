<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['Enviar'])){
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'corporacaohelpet@gmail.com';                    
    $mail->Password   = 'sqicymeiiqqctqqh';                            
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom('corporacaohelpet@gmail.com', 'Helpet');
    $mail->addAddress('corporacaohelpet@gmail.com', 'Helpet');    
    $mail->addReplyTo('corporacaohelpet@gmail.com', 'Information');

    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Mensagem de contato';
    
    $assunto = "<h1>Mensagem de Contato:</h1>
        <h3>Nome: </h3>".$_POST["Nome"]. "<br>
        <h3>Email: </h3>". $_POST["Email"]. "
        <h3>Mensagem:</h3>".
        $_POST["Mensagem"];
    
    $mail->Body = $assunto;

    $mail->send();
    header("Location: ../index.php#fale-conosco");
} catch (Exception $e) {
   
}
}
?>