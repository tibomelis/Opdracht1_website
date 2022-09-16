<?php
$visitor_email = $_GET['_email'];
$message = $_GET['_text'];

$email_from = 'tibo.melis@maxserv.com';
$email_subject = 'A test';
$email_body =
    "
    <h1>Hello World!</h1>
    <p>This is a test...</p>
    <p>$message</p>   
    ";


$to = "tibo.melis@maxserv.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);