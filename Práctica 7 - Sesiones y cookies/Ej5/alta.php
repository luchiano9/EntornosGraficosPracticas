<?php
session_start(); 
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$_SESSION['usuario']=$usuario; 
$_SESSION['clave']=$clave; 

echo("Se asignaron correctamente los valores<br>");
echo("<a href='mostrarValores.php'>Ir a pagina para ver los valores guardados</a>")
?>