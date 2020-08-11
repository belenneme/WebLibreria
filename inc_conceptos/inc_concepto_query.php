<?php

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

if (isset($_GET['busca_concepto']) && $_GET['busca_concepto']!='') {
	$busca_concepto = $_GET['busca_concepto'];

	if (is_numeric($busca_concepto)) {
		$q_concepto=mysql_query("SELECT * FROM concepto 
			WHERE (idconcepto=$busca_concepto OR descripcionconcepto LIKE '%$busca_concepto%') AND estado=1 ORDER BY idconcepto");
	}
	else {
		$q_concepto=mysql_query("SELECT * FROM concepto 
			WHERE descripcionconcepto LIKE '%$busca_concepto%' AND estado=1 ORDER BY idconcepto");
	}
}
else{
	$q_concepto=mysql_query("SELECT * FROM concepto WHERE estado=1 ORDER BY idconcepto");
}

?>