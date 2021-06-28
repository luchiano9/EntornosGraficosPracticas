<?php 
$destinatario = "lucianovannelli@gmail.com ";
$asunto = "Prueba";
$cuerpo = '
<html>
<head>
 <title>Envio de mail</title>
</head>
<body>
    <h1>Hola!</h1>
    <p>
    <b>Esto es un email de prueba</b>.
    Este es el ejercicio 1 de la práctica 5 de entornos graficos.
    </p>
</body>
</html>
';
$headers = "MIME-Version:1.0\r\n";
$headers .= "Content-type:text/html; charset=iso-8859- 1\r\n";
$headers .= "From: LucianoVannelli<luciano@hotmail.com>\r\n";

mail($destinatario,$asunto,$cuerpo,$headers)
?>
