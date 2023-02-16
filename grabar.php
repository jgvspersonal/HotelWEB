<?php require_once('conexion.php'); ?>
<?php
$tipodocume = $_POST["tipodoc"];
$numdocum = $_POST["numdocu"];
$nombres = $_POST["nomb"];
$pais = $_POST["pa"];
$region = $_POST["reg"];
$ciudad = $_POST["ciud"];
$telefono = $_POST["tele"];
$celular = $_POST["cel"];
$correo = $_POST["corr"];
$fechareg = $_POST["fechar"];
$rol = $_POST["rl"];
$contrase = $_POST["contra"];

echo "<h2>Dato Insertado en la BD</h2>";
echo "TipoDocumento: $tipodocume, Numero Documento: $numdocum, Nombres: $nombres, Pais: $pais, Region: $region, 
Ciudad: $ciudad, Telefono: $telefono, Celular: $celular, Correo: $correo, Fecha Registro: $fechareg, 
Rol: $rol, Contraseña: $contrase";
mysqli_select_db($conexion,$database_conexion);
$sqa = "INSERT INTO tblempleados (numerodocumento, nombres, idtipodocumento, ciudad, region, pais, telefono,
celular, correo, fecharegistro, contrasena, id_rol) values ('$numdocum', '$nombres', '$tipodocume', '$ciudad', '$region',
'$pais', '$telefono', '$celular', '$correo', '$fechareg', '$contrase', '$rol')";
$ejecuta = mysqli_query($conexion, $sqa);
//header('location:../nomina/grabar.html');
?>
<br></br>
<br><a href="index.html"><button type="button">Volver al Menú Principal</button></a></br>