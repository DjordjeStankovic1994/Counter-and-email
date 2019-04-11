<?php
require 'phpmailer/PHPMailerAutoload.php';
 // include('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->SMsTPDebug = 0;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'djordjestankovic1234578@gmail.com';                 // SMTP username
$mail->Password = 'djordjestankovic1234578';                           // SMTP password
$mail->SMTPSecure = 'tlc';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port =587;                                    // TCP port to connect to
$mail->SMTPKeepAlive = true; 
$mail->Mailer = "smtp"; // don't change the quotes! 
                //*************************************************************************** */
                //*************************************************************************** */
                //*************************************************************************** */
                //  DA BI SVE OVO RADILO POTREBNO JE ISKLJUCITI AVAST JER ON IMA fIREWALL (FATRAZID)
                // TAKODJE NA STRANICI LESS APP SECURE UKLJUCU ON jer nam on dozvoljva da manje sigurne aplikacije pris
                // na gmail-u.
                //*************************************************************************** */
                //*************************************************************************** */
                //*************************************************************************** */
//$mail->setFrom('localhost', 'Mailer');
 $mail->addAddress('stankovic.djordje94@gmail.com', 'Joe User');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Poruka sa PHP Mailera';
$mail->Body    = 'PORUKA SA PHP-A BY DJORDJE STANKOVIC ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
