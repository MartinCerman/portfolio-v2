<?php

use Nette\Mail\SmtpException;

require 'vendor/autoload.php';

$mailer = new Nette\Mail\SmtpMailer(
    host: 'smtp.gmail.com',
    username: 'cermanm@gmail.com',
    password: 'vkbdoxdghsgocyax',
    encryption: "tls");

$mail = new Nette\Mail\Message;
$mail->setFrom('cermanm@gmail.com', 'Portfolio Form')
     ->addTo('kennyibiza@seznam.cz', 'Martin Čerman')
     ->setSubject('martincerman.eu - nová zpráva')
     ->setBody("Jmeno: {$_POST["name"]}\nEmail: {$_POST["email"]}\n\n{$_POST["message"]}");
try{
    $mailer->send($mail);
    echo "E-mail successfully sent!";
} catch(SmtpException $ex) {
    echo "Something bad happened when sending e-mail!";
    http_response_code(502);
}
?>