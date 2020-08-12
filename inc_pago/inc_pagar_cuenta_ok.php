<?php
	mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);
	$idempleado=$_SESSION["idempleado"];
	$monto=$_POST['monto'];
	$descripcionpago=$_POST['cuentacorriente'];
	$idcuenta=$_POST['idcuenta'];
	$fecha=$_POST['fechaventa'];

	$pago = "INSERT INTO pago ( monto, fechapago, descripcionpago)
	 VALUES ('$monto',   '$fecha ' , '$descripcionpago')";
	
	mysql_query($pago);
	$cuenta_cliente=mysql_query("SELECT * fROM cuenta WHERE idcuenta=$idcuenta");
	$row_cuentacliente=mysql_fetch_array($cuenta_cliente);
	$saldo_anterior=$row_cuentacliente['saldocuenta'];

	$update_cliente= "UPDATE cuenta SET saldocuenta = saldocuenta -'$monto' WHERE idcuenta=$idcuenta";
	$q_update=mysql_query($update_cliente);
?>
<?php 
	include "inc_pago/comprobante_pago.php";
?>
