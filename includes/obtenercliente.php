
<?php
$hostname_conexion_weblibreria = "localhost";
$database_conexion_weblibreria = "db_compu_nuevo";
$username_conexion_weblibreria = "root";
$password_conexion_weblibreria = "";

$conexion_weblibreria = @mysql_connect($hostname_conexion_weblibreria, $username_conexion_weblibreria, $password_conexion_weblibreria) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);


$idclientejs = $_POST['idclientejs'];
$q_clientes=mysql_query("SELECT * FROM cliente
  INNER JOIN tipo ON tipo_idtipo=idtipo
  INNER JOIN direccion ON direccion_iddireccion=iddireccion
  INNER JOIN localidad ON localidad_idlocalidad=idlocalidad
  INNER JOIN provincia ON provincia_idprovincia=idprovincia
  WHERE idcliente=$idclientejs
  ORDER BY nombreorsocial");
$row_cliente=mysql_fetch_array($q_clientes);
	echo $row_cliente['cuilcliente'].",".$row_cliente['tiponombre'];
?>
