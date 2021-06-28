<?php
session_start();
$usuario=$_SESSION['usuario']; 
$clave=$_SESSION['clave']; 

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar Valores</title>
</head>
<body>
  <br>
  <?php
    echo("<h1>Usuario: $usuario </h1>");
    echo("<h1>Clave: $clave </h1>");
  ?>
</body>
</html>