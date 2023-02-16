<?php require_once('conexion.php'); ?>
<?php
$nomhabita = $_POST["nomhabt"];
$numdocum = $_POST["numdoc"];
$fechentrada = $_POST["fechentra"];
$fechsalida = $_POST["fechsal"];
$nomapell = $_POST["nomape"];
$telefono = $_POST["tel"];
$correo = $_POST["corr"];
$mensaje = $_POST["men"];

echo "<h2>Dato Insertado en la BD</h2>";
echo "Nombre Habitacion: $nomhabita, Numero Documento: $numdocum, Fecha Entrada: $fechentrada, Fecha Salida: $fechsalida, Nombres y Apellidos: $nomapell, 
Telefono: $telefono, Correo: $correo, Mensaje: $mensaje";
mysqli_select_db($conexion,$database_conexion);
$sqa = "INSERT INTO tblreservas (nombrehabitacion, idcliente, fechaentrada, fechasalida, nombres, numerotel, correo,
mensaje) values ('$nomhabita', '$numdocum', '$fechentrada', '$fechsalida', '$nomapell',
'$telefono', '$correo', '$mensaje')";
$ejecuta = mysqli_query($conexion, $sqa);
//header('location:../nomina/grabar.html');
?>
<br></br>
<br><a href="index.html"><button type="button">Volver al Menú Principal</button></a></br>