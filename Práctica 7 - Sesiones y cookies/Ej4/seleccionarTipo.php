<?php
$seleccion = $_POST['radio'];
setcookie("seleccion", $seleccion , time()+ 3600*24*365);
echo("La seleccion fue exitosa");
echo("<A href= 'mainPage.php'>Volver al inicio</A>");
?>
