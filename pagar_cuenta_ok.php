<?php require_once('Connections/conexion_weblibreria.php'); ?>
<?php include('sis_acceso_ok.php'); ?>
<!doctype html>
<html lang="es">
<head>
	<?php include "sis_header.php" ?>
</head>
<body class=" theme-blue">
	<div class="content">
		<div class="header">
			<h1 class="page-title">Comprobante de Pago</h1>
		</div>
		<div class="main-content">
			<div id="page-stats" class="panel-collapse panel-body collapse in">
			<?php  include "inc_pago/inc_pagar_cuenta_ok.php" ?>
			<div><a href="pago.php"><button class="btn btn-info"><strong>Volver a Cuentas</strong></button></a></div>	
			</div>
		</div>
		
	</div>
	
</body>
</html>
