<?php
$nombre = $_POST['nombre'];
$asunto = "Su amigo $nombre le recomienda nuestro sitio!";
$mensaje = $_POST['mensaje'];
$email = $_POST['correo'];
$desde = 'From: Web<webmail@servidor.com>\r\n';
$headers = "MIME-Version:1.0\r\n";
$headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
$headers .= $desde;

mail($email,$asunto,$mensaje,$headers)
?>