<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';
require 'mail_template.php';

function send_mail($to, $description)
{
    $mail = new PHPMailer();
    //connect to server
    $mail->isSMTP();
    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->SMTPAuth = true;

    //log in
    $mail->Username = 'heyitstibo@gmail.com';
    $mail->Password = 'gzhbucfvnmmgmgcs';

    //mail stuff
    $mail->setFrom('heyitstibo@gmail.com', 'Tibo Melis');
    $mail->addAddress($to, $to);
    $mail->Subject = $description;
    $mail->msgHTML(getTemplate($description));
    $mail->AltBody = 'This is a plain-text message body';

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
}