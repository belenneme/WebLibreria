<?php require_once('Connections/conexion_weblibreria.php'); ?>
<?php include('sis_acceso_ok.php'); ?>
<?php mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);

	
	$q_empleado=mysql_query("SELECT * FROM empleado 
        WHERE idempleado=$idempleado");
    $row_empleado=mysql_fetch_array($q_empleado);

	$q_cliente=mysql_query("SELECT * FROM cuenta
        INNER JOIN cliente
        ON cliente_idcliente=idcliente
        WHERE idcuenta=$idcuenta");
	$row_cliente=mysql_fetch_array($q_cliente);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include "sis_header.php" ?>
<title>Smile</title>
</head>

<body>
<br><br>
<div class="  col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="panel panel-danger">
        <p class="panel-heading no-collapse"><i class="fa fa-check" aria-hidden="true"></i>
        Pago finalizado</p>
        <div class="panel-body">
            <table class='table  table-bordered table-striped'>
				<tr>
					<td class="info" align="right" class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><div align='right'>Fecha </div></td>
					<td  align="left" class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><?php echo $fecha; ?></div></td>
					<td class="info" align="right"><div align='right'>Empleado</div></td>
					<td  align="lef" colspan="3" class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><div><?php echo $row_empleado['apellidoempleado']; ?></div></td>
				</tr>
				<tr class="active">
					<td class="info" ><div align='right'>Cliente: </div></td>
					<td><?php echo $row_cliente['nombreorsocial']; ?></td>
					<td class="info"><div align='right'>Cuil Cliente: </div></td>
					<td align="lef" colspan="3" class="col-xs-4 col-sm-4 col-md-4 col-lg-4"><?php echo $row_cliente['cuilcliente']; ?></td>
				</tr>
				<tr>
					<td class="info" ><div class="info" align='right'>Numero de Cuenta: </div></td>
					<td  colspan="5"><?php echo $row_cliente['idcuenta']; ?></td>
				</tr>
				<tr>
					<br>
					<td colspan="6"><div align='center'><strong>Datos del Pago</strong></div></td>
					
				</tr>
				<tr>
					<td class="info" align="right">Descripcion de Pago</td>
					<td class="info" align="right">Monto</td>
                    <td class="info" align="right">Saldo Anterior</td>
                    <td class="info" align="right">Saldo Actual</td>
				</tr>
				
				<tr>
					<td align="right"><?php echo $descripcionpago?></td>
                    <td align="right"><?php echo $monto?></td>
                    <td align="right"><?php echo $saldo_anterior?></td>
					<td align="right"><?php echo $row_cliente['saldocuenta'] ?></td>	
				</tr>
                <td colspan="6"></td>
				<tr>
				 	<td colspan="3" align='right'><strong>Total Pagado</strong> </td>
					<td colspan="3" align='right'><?php echo $monto ?></td>
				</tr>
				<tr>
				 	<td align="right" colspan="6"><div id="imprimir"><a><i class="fa fa-print" aria-hidden="true">    </i><strong> Imprimir</strong></a></div></td>
				</tr>
	</table>
	
        </div>
    </div>
  <?php include 'inc_footer.php'; ?>
</div>
</body>

<script type="text/javascript">
    $('#imprimir').on('click',function(){
    window.print();
    });
</script>

</html>