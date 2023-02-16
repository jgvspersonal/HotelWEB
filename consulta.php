<?php require_once('conexion.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
$numdocum = $_POST["numdocu"];
mysqli_select_db($conexion,$database_conexion);
$query_Recordset1 = "SELECT * FROM tblempleados WHERE numerodocumento = '$numdocum'";
$Recordset1 = mysqli_query($conexion, $query_Recordset1) or die(mysql_error());
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);


?>
<!doctype html>
<html lang="es">
<html class="">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Inicio</title>
</head>


<body bgcolor="#CCCCCC">
<header>
<div align="center">

<h3>CONSULTA DE EMPLEADO</h3>
</header>
<section id = "seccion">
	<article>
    </div>
<div align="center">

<table border="3" width="1000" bordercolor="#0000FF"  style="font-size:12px" bgcolor="#FFFFFF">  <tr>
    <td><h3>Numero Documento</h3></td>
    <td><h3>Nombres</h3></td>
    <td><h3>Tipo Documento</h3></td>
    <td><h3>Ciudad</h3></td>
    <td><h3>Region</h3></td>
    <td><h3>Pais</h3></td>
    <td><h3>Telefono</h3></td>
    <td><h3>Celular</h3></td>
    <td><h3>Correo Electronico</h3></td>
    <td><h3>Fecha de Registro</h3></td>
    <td><h3>Contraseña</h3></td>
    <td><h3>Rol</h3></td>
  </tr>
<?php
   do {
?>
    <tr>
      <td ><?php echo $row_Recordset1['numerodocumento'];  ?></td>
      <td ><?php echo $row_Recordset1['nombres'];  ?></td>
      <td ><?php echo $row_Recordset1['idtipodocumento'];  ?></td>
      <td ><?php echo $row_Recordset1['ciudad'];  ?></td>
      <td ><?php echo $row_Recordset1['region'];  ?></td>
      <td ><?php echo $row_Recordset1['pais'];  ?></td>
      <td ><?php echo $row_Recordset1['telefono'];  ?></td>
      <td ><?php echo $row_Recordset1['celular'];  ?></td>
      <td ><?php echo $row_Recordset1['correo'];  ?></td>
      <td ><?php echo $row_Recordset1['fecharegistro'];  ?></td>
      <td ><?php echo $row_Recordset1['contrasena'];  ?></td>
      <td ><?php echo $row_Recordset1['id_rol'];  ?></td>
	</tr>
    <?php
		 } while ($row_Recordset1 = mysqli_fetch_assoc($Recordset1)); ?>
    </table>
<hr/>

<!--<a href="../acciones/menuacc.php" ><img src="../imagenes/menu.PNG"></a> -->
</div>
<hr/>
</article>
</section>
</body>

</html>
<?php
mysqli_free_result($Recordset1);
?>

<br><a href="index.html"><button type="button">Volver al Menú Principal</button></a></br>