<?php
$nombre = $_POST['nombre'];
$asunto = "Consulta Nueva en su pagina web de $nombre";
$mensaje = $_POST['mensaje'];
$email = $_POST['correo'];
$mensaje .= "\n Correo del usuario: $email";
$destino = 'webmaster@gmail.com';
$desde = 'From: Web<webmail@servidor.com>\r\n';
$headers = "MIME-Version:1.0\r\n";
$headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
$headers .= $desde;

mail($destino,$asunto,$mensaje,$headers)
?>