<?php require_once('conexion.php'); ?>
<?php
$numdocum = $_POST["numdocu"];
$tipodocume = $_POST["tipodoc"];
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

echo "<h2>Se actualizo la información del documento Número: </h2>";
echo "$numdocum";
mysqli_select_db($conexion,$database_conexion);
$sqa = "UPDATE tblempleados SET idtipodocumento = '$tipodocume', nombres = '$nombres', pais = '$pais', region = '$region', 
ciudad = '$ciudad', telefono = '$telefono', celular = '$celular', correo = '$correo', fecharegistro = '$fechareg',
id_rol = '$rol', contrasena = '$contrase'WHERE numerodocumento ='$numdocum'";
$ejecuta = mysqli_query($conexion, $sqa);
//header('location:../nomina/grabar.html');
echo "<h2>Los datos nuevos son los siguientes: </h2>";
echo "Tipo Documento: $tipodocume, Nombres: $nombres, Pais: $pais, Region: $region, Ciudad: $ciudad, Telefono: $telefono, Celular: $celular, Correo: $correo, Fecha Registro: $fechareg, Rol: $rol, Contraseña: $contrase" ;
?>
<br></br>
<br><a href="index.html"><button type="button">Volver al Menú Principal</button></a></br>