<?php

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

if (isset($_GET['busca_categoriaproducto']) && $_GET['busca_categoriaproducto']!='') {
	$busca_categoriaproducto = $_GET['busca_categoriaproducto'];

	if (is_numeric($busca_categoriaproducto)) {
		$q_categoriaproducto=mysql_query("SELECT * FROM categoriaproducto 
			WHERE nombrecategoria LIKE '%$busca_categoriaproducto%' ORDER BY nombrecategoria");
	}
	else {
		$q_categoriaproducto=mysql_query("SELECT * FROM categoriaproducto 
			WHERE nombrecategoria LIKE '%$busca_categoriaproducto%' ORDER BY nombrecategoria ");
	}
}
else{
	$q_categoriaproducto=mysql_query("SELECT * FROM categoriaproducto ORDER BY nombrecategoria " );
}

?>