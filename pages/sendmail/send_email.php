<?php
$fname = $_POST['_fname'];
$lname = empty($_POST['_lname']) ? '(Last name not specified)' : $_POST['_lname'];
$email = $_POST['_email'];
$phone = $_POST['_phone'];
$sumry = $_POST['_sumry'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


require 'vendor/autoload.php';
require 'mail_template/mail_template.php';

$str = file_get_contents('config.json');
$config = json_decode($str, true);

$mail = new PHPMailer();
//connect to server
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_OFF;
$mail->Host = $config['smtp']['host'];
$mail->Port = $config['smtp']['port'];
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPAuth = true;

//log in
$mail->Username = $config['mail'];
$mail->Password = $config['password'];

//mail stuff
$mail->setFrom('heyitstibo@gmail.com', 'Tibo Melis');
$mail->addAddress($email, $fname);
$mail->Subject = $sumry;
$mail->msgHTML(getTemplate($fname, $lname, $email, $phone, $sumry));
$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
    echo "<script>alert('Mailer Error: " . $mail->ErrorInfo . "')</script>";
} else {
    echo "<script>alert('Message sent!')</script>";
}


?>
<script>
    history.back();
</script>