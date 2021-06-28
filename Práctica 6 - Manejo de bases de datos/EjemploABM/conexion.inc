<?php
$link = mysqli_connect("127.0.0.1", "root", "root") or die ("Problemas de conexión a la base de
datos");
mysqli_select_db($link, "docentes");
?>
