<?php mysql_select_db($database_conexion_weblibreria,$conexion_weblibreria);
?>
<form action="alta_compra.php" method="POST" role="form" onsubmit="return validar()">
  <div class="row control-group">
    <div class="form-group col-lg-3 col-lg-offset-9">
        <input type="text" name="fechacompra" id="inputFechacompra" class="form-control" value="<?php echo date("Y-m-d h:i:s");?>" required readonly>
    </div>
  </div>
  <legend><h4>Datos de Productos</h4></legend>
  <table id="tabla" class="table table-bordered table-striped">
    <!-- Cabecera de la tabla -->
    <thead>
      <tr>
        <th class="col-lg-2">C&oacute;digo de Producto</th>
        <th class="col-lg-3">Descripci&oacute;n</th>
        <th class="col-lg-2">Precio Unitario</th>
        <th class="col-lg-2">Cantidad</th>
        <th class="col-lg-2">Importe</th>
        <th class="col-lg-1"></th>
      </tr>
    </thead>
    <tbody>
      <?php include "inc_compras/inc_compra_consulta_linea.php" ?>
      <?php include "inc_compras/inc_compra_grid.php" ?>
      <tr>
        <td colspan="4" align="right">Total</td>
        <td align="right">
          <input type="number" id="inputsubtotal" class="form-control" value="<?php echo $importe ?>" min="0" step="any" readonly required="required">
        </td>
        <td></td>
      </tr>
    </tbody>
  </table>
  <!-- Botón para agregar filas -->
  <div align="right">
    <a href="agregar_producto_compra.php"><button type="button" class= "btn btn-default"><span class="glyphicon glyphicon-plus"> A&ntilde;adir</span></a>
    <br>
  </div>
  <div class="col-lg-12">
    <br>
    <br>
    <legend><h4>Datos del Proveedor</h4></legend>
    <div class="col-lg-12">
      <div class="row">
        <div class="form-group col-lg-6">
          Nombre Proveedor
          <div class="clearfix"></div>
          <?php include "includes/chosen/index_select_proveedor.php" ?>
        </div>
        <div class="form-group col-lg-4">
          Cuil
          <input type="text" name="cuilproveedor" id="inputcuilproveedor" class="form-control" value="00-00000000" required="required" readonly>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-lg-4">
          Factura n&uacute;mero
          <input type="text" name="numerofactura" id="inputnumerofactura" class="form-control" value="">
        </div>
      </div>
    </div>
    <div class="col-lg-12 form-group">
      <br>
      <br>
      <button type="submit" id="confirmarCompra" class="btn btn-info pull-right">Aceptar Compra</button>
      <button type="button" id="cancelar" class="btn btn-danger pull-left">Cancelar Compra</button>
    </div>
  </div>
</form>

<!-- Funcion para refrescar los datos cargados en la pagina -->
<script type="text/javascript">
  $('#cancelar').on('click',function(){
    $.post("cancelarcompra.php", {}, function(data){
      location.reload();
    });
  });
</script>

<!-- valida que se agreg{o un producto para confirmar la compra -->
<script>
$(document).ready(function() {
  $('#confirmarCompra').prop('disabled', true);
  var total = $('#inputsubtotal').val();
  if(total > 0) {
    $('#confirmarCompra').prop('disabled', false);
  }
});
</script>

<!-- valida que el cliente este registrado si se ingresa condicion de pago cuenta corriente -->
<script>
function validar(){
var idproveedor = $('#inputidproveedor').val();
var total = $('#inputsubtotal').val();
  if(idproveedor==0){
  alert('Debe seleccionar un proveedor');
  return false;
  }
  else {
    if (total==0) {
      alert('cargar al menos un producto');
      return false;
    }
  }
}
</script>
