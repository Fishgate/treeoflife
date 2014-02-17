<?php
    require '../resources/PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->isSMTP();                                      // Set mailer to use SMTP
    //$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup server
    //$mail->SMTPAuth = true;                               // Enable SMTP authentication
    //$mail->Username = 'jswan';                            // SMTP username
    //$mail->Password = 'secret';                           // SMTP password
    //$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

    $mail->From = 'tyrone@fishgate.com';
    $mail->FromName = 'Tyrone';
    $mail->addAddress('$_POST[email]');  // Add a recipient
    $mail->addReplyTo('tyrone@fishgate.co.za', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    //$mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Website Form';
    $mail->Body    = 'NAME: $_POST[name]<br />PHONE: $_POST[tel]<br />EMAIL: $_POST[email]<br />MESSAGE: $_POST[message]';
    $mail->AltBody = 'NAME: $_POST[name], PHONE: $_POST[tel],<br />EMAIL: $_POST[email], MESSAGE: $_POST[message]';

    if(!$mail->send()) {
       echo 'Message could not be sent.';
       echo 'Mailer Error: ' . $mail->ErrorInfo;
       exit;
    }

    echo 'Message has been sent';
    
    //print_r($_POST);
    
?>
