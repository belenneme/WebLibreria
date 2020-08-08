<?php require_once('Connections/conexion_weblibreria.php'); ?>
<?php include('sis_acceso_ok.php'); ?>
<?php

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

$idlineacompra=$_GET['idlineacompra'];

$consulta="DELETE FROM lineacompra WHERE idlineacompra=$idlineacompra and compra_idcompra='1'";
mysql_query($consulta);
header ("Location: compra_nueva.php");

?>