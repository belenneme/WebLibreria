<?php require_once('Connections/conexion_weblibreria.php'); ?>
<?php include('sis_acceso_ok.php'); ?>
<?php
	mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

	$eliminarventa = "DELETE FROM lineaventa WHERE venta_idventa='1'";
	mysql_query($eliminarventa);

?>