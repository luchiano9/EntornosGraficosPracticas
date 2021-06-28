<?php
$usuario = $_POST['usuario'];
setcookie("usuario", $usuario , time()+ 3600*24*365);
echo("<A href= 'ej3.php'>Volver al inicio</A>");
?>
