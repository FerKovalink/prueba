<?php
    $para = "kovahermes@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $header = "From: " . $email . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $c_mensaje = "Este mensaje fue enviado por: " . $nombre . "\r\n";
    $c_mensaje .= "Su mail es : " . $email . "\r\n";
    $c_mensaje .= "Telefono de contacato: " . $telefono . "\r\n";
    $c_mensaje .= "Asunto: " . $asunto . "\r\n";
    $c_mensaje .= "Mensaje: " . $_POST["mensaje"] . "\r\n";
    $c_mensaje .= "Enviado el: " . date("d/m/y", time());

    mail($para, $asunto, $c_mensaje);

    header("Location:../index.html");
?>

