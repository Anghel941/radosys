<?php 
    $destinatario='edmelectronica21@gmail.com';//al correo a quien se envia el mensaje
    $nombre=$_POST['nombre'];
    $asunto=$_POST['asunto'];
    $email=$_POST['correo'];
    $mensaje=$_POST['mensaje'];

    $header= "Enviado desde la pagina Web RADOSYS";
    $mensajecompleto = $mensaje."\nAtentamente: " .$nombre;


    //enviar correo
    mail($destinatario,$asunto,$mensajecompleto,$header);
    echo"<script>alert('Correo enviado correctamente.')</script>";
    echo"<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>