<?php

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

if (isset($_GET['busca_novedadempleado']) && $_GET['busca_novedadempleado']!='') {
	$busca_novedadempleado = $_GET['busca_novedadempleado'];
	$q_novedadempleado=mysql_query("SELECT idNovedad , fechaNovedad, nombreempleado, apellidoempleado, falta, llegadaTarde 
							FROM novedad 
							INNER JOIN empleado ON empleado_idempleado= idempleado
							WHERE nombreempleado  LIKE '$busca_novedadempleado' OR apellidoempleado LIKE '$busca_novedadempleado' ORDER BY fechaNovedad desc");
	
}
else{
	$q_novedadempleado=mysql_query("SELECT idNovedad, fechaNovedad, nombreempleado, apellidoempleado, falta,llegadaTarde
						FROM novedad INNER JOIN empleado ON empleado_idempleado=idempleado
						ORDER BY fechaNovedad desc");
}

?>