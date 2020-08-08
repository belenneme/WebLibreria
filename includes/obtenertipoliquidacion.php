
<?php

$hostname_conexion_weblibreria = "localhost";
$database_conexion_weblibreria = "db_compu_nuevo";
$username_conexion_weblibreria = "root";
$password_conexion_weblibreria = "";
$conexion_weblibreria = @mysql_connect($hostname_conexion_weblibreria, $username_conexion_weblibreria, $password_conexion_weblibreria) or trigger_error(mysql_error(),E_USER_ERROR);


mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);


$idtipoliquidacionjs = $_POST['idtipoliquidacionjs'];
$q_tipoliquidacion=mysql_query("SELECT * FROM tipoliquidacion
 	WHERE idtipoliquidacion=$idtipodeliquidacionjs");
$row_tipoliquidacion=mysql_fetch_array($q_tipoliquidacion);
	echo $row_tipoliquidacion['idtipoliquidacion'];
?>
