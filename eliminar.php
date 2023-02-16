<?php require_once('conexion.php'); ?>
<?php
$numdocum = $_POST["numdocu"];
mysqli_select_db($conexion,$database_conexion);
$sqa = "DELETE FROM tblempleados WHERE numerodocumento = '$numdocum'";
$ejecuta = mysqli_query($conexion, $sqa);
//header('location:../nomina/grabar.html');
echo "<h2>Numero de Documento Eliminado: </h2>";
echo "$numdocum";
?>
<br></br>
<br><a href="index.html"><button type="button">Volver al Menú Principal</button></a></br>