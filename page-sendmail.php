<?php
if (isset($_POST['email']) && $_POST['email'] != "") {
    
    $from                   = trim($_POST['email']);
    $nombre                 = utf8_decode($_POST['nombre']);
    $email                  = utf8_decode($_POST['email']);
    $asunto                  = utf8_decode($_POST['asunto']);
    $mensaje                = utf8_decode($_POST['mensaje']);

    require_once('./PHPMailer/class.phpmailer.php');

    $mail = new PHPMailer(true);
    $mail->From = $email;
    $mail->FromName = $nombre;
    
    $mail->addAddress('frkalderon@gmail.com', 'Mail SK8SPOTSMX');
    $mail->addReplyTo($email, $nombre);
    $mail->addBCC("tony@blueterrier.mx");
    $mail->isHTML(true);
    $mail->Subject = "Contacto SK8SPOTSMX";
    $mail->Body = "<p>". $nombre ." escribi&oacute;: </p>";
    $mail->Body.= "<p><b>Email: </b>". $email ."</p>";
    $mail->Body.= "<p><b>Telefono: </b>". $telefono ."</p>";
    $mail->Body.= "<p><b>mensaje: </b>". $mensaje ."</p>";
    $mail->Body.= "<p><b>Asunto: </b>". $asunto ."</p>";
    
    
    $mail->AltBody = "Nombre: " . $nombre;
    $mail->AltBody .= " // " . $ciudad;
    $mail->AltBody .= " // " . $telefono;
    $mail->AltBody .= " // " . $email;
    $mail->AltBody .= " // " . $mensaje;
    $mail->AltBody .= " // " . $asunto;

    if(!$mail->send()) { echo "Mailer Error: " . $mail->ErrorInfo; }
    
    else {echo "Message has been sent successfully"; }

}