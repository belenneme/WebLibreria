
<?php
$hostname_conexion_weblibreria = "localhost";
$database_conexion_weblibreria = "web_libreria";
$username_conexion_weblibreria = "root";
$password_conexion_weblibreria = "";

$conexion_weblibreria = @mysql_connect($hostname_conexion_weblibreria, $username_conexion_weblibreria, $password_conexion_weblibreria) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);


$idproveedorjs = $_POST['idproveedorjs'];
$q_proveedores=mysql_query("SELECT * FROM proveedor
 	WHERE idproveedor=$idproveedorjs");
$row_proveedor=mysql_fetch_array($q_proveedores);
	echo $row_proveedor['cuilproveedor'];
?>
