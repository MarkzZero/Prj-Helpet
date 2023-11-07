<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['Enviar'])) {
    // Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        // Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'corporacaohelpet@gmail.com';
        $mail->Password   = 'sqicymeiiqqctqqh';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('corporacaohelpet@gmail.com', 'Helpet');

        // Obtenha o endereço de e-mail
        $email = $_POST["Email"];
        $mail->addAddress($email);
        $mail->addReplyTo('corporacaohelpet@gmail.com', 'Information');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Mensagem sobre a senha';

        // Crie a mensagem com base nos dados do formulário
        $assunto = "<h1>Restauração da senha:</h1> <br>
            <h3>Olá $email</h3>
            <p>Recebemos seu pedido sobre a senha, clique no link abaixo para ir a página de restauração:</p> <br>
            <a href='http://localhost/prj-helpet08-10/ong/alterarSenha/alterarSenha.php'>Link para restauração</a>";

        $mail->Body = $assunto;

        $mail->send();
        header("Location: ../index.php#esqueceu-senha");
    } catch (Exception $e) {
        // Trate qualquer exceção que possa ocorrer durante o envio do e-mail
    }
}
?>