
<?php
$hostname_conexion_weblibreria = "localhost";
$database_conexion_weblibreria = "web_libreria";
$username_conexion_weblibreria = "root";
$password_conexion_weblibreria = "";

$conexion_weblibreria = @mysql_connect($hostname_conexion_weblibreria, $username_conexion_weblibreria, $password_conexion_weblibreria) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

$idlocalidad=$_GET['idlocalidad'];
$idprovincia = $_POST['idprovinciajs'];
$localidad="SELECT * FROM localidad WHERE provincia_idprovincia=$idprovincia";
$q_localidad=mysql_query($localidad);

while ($row_localidad=mysql_fetch_array($q_localidad)) { 
		if ($row_localidad['idlocalidad'] == $idlocalidad) {
		$html.= '<option value="'.$row_localidad['idlocalidad'].'" selected >'.($row_localidad['nombrelocalidad']).'</option>';
		}
        else{       
        $html.= '<option value="'.$row_localidad['idlocalidad'].'">'.$row_localidad['nombrelocalidad'].'</option>';
    	}
    }

echo utf8_encode($html);
?>
