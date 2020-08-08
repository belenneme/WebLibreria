<?php
	mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);
	$tipo = "SELECT * FROM tipo";
	$q_tipo = mysql_query($tipo);
?>
	<select name="tipo" id="input" class="form-control" required="required">
    <option value="0">Tipo de cliente</option>
    <?php
		while ($row_tipo = mysql_fetch_array($q_tipo)) {?>
			<option value="<?php echo $row_tipo['idtipo']?>"> <?php echo $row_tipo['tiponombre'] ?> </option>
	<?php } ?>
    </select>
