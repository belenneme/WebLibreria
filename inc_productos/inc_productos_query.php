<?php

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

if (isset($_GET['busca_producto']) && $_GET['busca_producto']!='') {
	$busca_producto = $_GET['busca_producto'];

	if (is_numeric($busca_producto)) {
		$q_producto=mysql_query("SELECT * FROM producto 
		INNER JOIN categoriaproducto ON categoriaproducto_idcategoriaproducto = idcategoriaproducto
		WHERE idproducto=$busca_producto AND estado=1");
	}
	else {
		$q_producto=mysql_query("SELECT * FROM producto INNER JOIN categoriaproducto ON categoriaproducto_idcategoriaproducto = idcategoriaproducto
			WHERE nombreproducto LIKE '%$busca_producto%' AND estado=1 ");
	}
}
else{
	$q_producto=mysql_query("SELECT * FROM producto 
	INNER JOIN categoriaproducto ON categoriaproducto_idcategoriaproducto = idcategoriaproducto
	AND estado=1");
}

?>