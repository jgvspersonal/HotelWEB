<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_conexion = "localhost";
$database_conexion = "hotelwebs";
$username_conexion = "hotelwebs";
$password_conexion = "jgvs2702";
$conexion = mysqli_connect($hostname_conexion, $username_conexion, $password_conexion) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
