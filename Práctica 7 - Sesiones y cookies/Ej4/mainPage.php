<?php
$seleccion = "";
if (isset($_COOKIE['seleccion']))
{
$seleccion = $_COOKIE['seleccion'];
}
?>
<html>
<body>
<?php if(!isset($_COOKIE['seleccion'])) :?>
<FORM action="seleccionarTipo.php" method="POST" name="formUsuario">
<p>Seleccionar tipo de titular:</p>
<div>
  <input type="radio" id="noticiaPolitica" name="radio" value="Noticia Politica">
  <label for="noticiaPolitica">Noticia Politica</label>
</div>
<div>
  <input type="radio" id="noticiaEconomica" name="radio" value="Noticia Economica">
  <label for="noticiaEconomica">Noticia Economica</label>
</div>
<div>
  <input type="radio" id="noticiaDeportiva" name="radio" value="Noticia Deportiva">
  <label for="noticiaDeportiva">Noticia Deportiva</label>
</div>
<tr>
 <td colspan="2" align="center"> 
   <input type="SUBMIT" name="Submit" value="Seleccionar">
 </td>
</tr>
</FORM>
<br>
<?php endif; ?>
<?php if(isset($_COOKIE['seleccion'])) :?>
  <h1>El titulo elegido es: <?php echo($seleccion);?> </h1>
  <br>
  <a href="borrarCookie.php" class="href"> Borrar la seleccion</a>
<?php endif; ?>

<?php if(isset($_COOKIE['seleccion']) && $_COOKIE['seleccion'] >= 0) :?>
  <br>
  <h1>Nota: </h1>
  <h1>Se debe reiniciar la sesion de navegacion para que se borre la cookie </h1>
  <br>
<?php endif; ?>
</body>
</html>