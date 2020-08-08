<?php

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

$q_pago=mysql_query("SELECT * FROM cuenta inner join cliente on cliente_idcliente= idcliente where cuenta.estado=1");


?>