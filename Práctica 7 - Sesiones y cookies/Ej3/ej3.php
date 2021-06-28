<?php
$usuario = "";
if (isset($_COOKIE['usuario']))
{
$usuario = $_COOKIE['usuario'];
}
?>
<html>
<body>
<?php
?>
<FORM action="creaCookie.php" method="POST" name="formUsuario">
<table width="356">
<tr>
 <td width="103"> Usuario: </td>
 <td width="243"> 
   <input type="text" name="usuario" size="20" maxlength="20" value="<?php echo($usuario); ?>">
 </td>
</tr>
<tr>
 <td colspan="2" align="center"> 
   <input type="SUBMIT" name="Submit" value="cambiarUsuario">
 </td>
</tr>
</table>
</FORM>
</body>
</html>