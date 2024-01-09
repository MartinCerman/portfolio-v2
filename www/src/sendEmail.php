<?php

if($_SERVER["REQUEST_METHOD"] !== "POST"
 || !isset($_POST["name"]) 
 || !isset($_POST["email"]) 
 || !isset($_POST["message"]) 
 || $_POST["name"] === "" 
 || $_POST["email"] === "" 
 || $_POST["message"] === ""){
    http_response_code(400);
    return;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'cermanm@gmail.com';
    $mail->Password   = 'password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
    $mail->CharSet    = PHPMailer::CHARSET_UTF8;
    $mail->Encoding   = PHPMailer::ENCODING_BASE64;

    $mail->setFrom('cermanm@gmail.com', 'Portfolio Form');
    $mail->addAddress('kennyibiza@seznam.cz', 'Martin Čerman');
    $mail->Subject = 'martincerman.eu - nová zpráva';
    $mail->Body    = "Jmeno: {$_POST["name"]}\nEmail: {$_POST["email"]}\n\n{$_POST["message"]}";

    $mail->send();

    echo "E-mail successfully sent!";
} catch (Exception $e) {
    echo "Something bad happened!";
    http_response_code(502);
}
?>