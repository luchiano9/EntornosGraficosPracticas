<html>
<head>
<title>Alta Ciudad</title>
</head>
<body>
<?php
include("conexion.inc");
//Captura datos desde el Form anterior
$vCiudad = $_POST['ciudad'];
$vPais = $_POST['pais'];
$vHabitantes = $_POST['habitantes'];
$vSuperficie = $_POST['superficie'];
if (isset($_POST['tienemetro']) && $_POST['tienemetro'] == "Si"){
  $vTieneMetro = 1;
} else {
  $vTieneMetro = 0;
}
//Arma la instrucción SQL y luego la ejecuta
$vSql = "SELECT Count(ciudad) as canti FROM ciudades WHERE ciudad='$vCiudad' AND pais='$vPais'";
$vResultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
$vCantCiudades = mysqli_fetch_assoc($vResultado);
if ($vCantCiudades ['canti']!=0){
 echo ("La ciudad ya Existe<br>");
 echo ("<A href='Menu.html'>VOLVER AL ABM</A>");
}
else {
$vSql = "INSERT INTO ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
values ('$vCiudad','$vPais', '$vHabitantes', '$vSuperficie', '$vTieneMetro')";
 mysqli_query($link, $vSql) or die (mysqli_error($link));
 echo("Se Registro la ciudad<br>");
echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
// Liberar conjunto de resultados
mysqli_free_result($vResultado);
}
// Cerrar la conexion
mysqli_close($link);
?></body></html>