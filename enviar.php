<?php


include("Mailer/src/PHPMailer.php");
include("Mailer/src/SMTP.php");
include("Mailer/src/Exception.php");



try {
    $emailTo=$_POST["correo"];
    $subject=$_POST["asunto"];
    $bodyEmail=$_POST["mensaje"];
 


    $fromemail="clickjaenoficial@gmail.com";
    $fromname="Anunciar";
    $host="smtp.live.com";
    $port="587";
    $SMTPAuth="login";
    $SMTPSecure="tls";
    $password="anghelithocarrerolv99";
  
    $mail= new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();   
    $mail->SMTPDebug = 1;
    $mail->Host       = $host;      
    $mail->Port       = $port;                
    $mail->SMTPAuth   = $SMTPAuth;       
    $mail->SMTPSecure = $SMTPSecure;   
    $mail->Username   = $fromemail;                  
    $mail->Password   = $password;   
   
    

    //Recipients
    $mail->setFrom($fromemail,$fromname);
    $mail->addAddress($emailTo);     //Add a recipient


    //Content
    $mail->isHTML(true);                                
    $mail->Subject = $subject;
    $mail->Body    = $bodyEmail;

    if (!$mail->send()) {
       echo "No se pudo enviar el correo!";
       die();
    }

    echo 'Correo enviado';
    die();
} catch (Exception $e) {
   
}

?>