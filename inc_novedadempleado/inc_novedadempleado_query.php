<?php

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

if (isset($_GET['busca_novedadempleado']) && $_GET['busca_novedadempleado']!='') {
	$busca_novedadempleado = $_GET['busca_novedadempleado'];

	if (is_numeric($busca_novedadempleado)) {
		$q_novedadempleado=mysql_query("SELECT idNovedad , fechaNovedad, nombreempleado, falta, llegadaTarde 
							FROM novedad 
							INNER JOIN empleado ON empleado_idempleado= idempleado
							WHERE idNovedad=$busca_novedadempleado ");
	}
	
}
else{
	$q_novedadempleado=mysql_query("SELECT idNovedad, fechaNovedad, nombreempleado, falta,llegadaTarde
						FROM novedad INNER JOIN empleado ON empleado_idempleado=idempleado");
}

?>