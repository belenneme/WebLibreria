<?php require_once('Connections/conexion_weblibreria.php'); ?>
<?php include('sis_acceso_ok.php'); ?>
<!doctype html>
<html lang="es">
<head>    
	<?php include "sis_header.php" ?>
</head>
<body class=" theme-blue">
	<?php include "sis_script.php" ?>
	<?php include "sis_menu_usuario.php" ?>   
	<?php include "sis_menu.php" ?>
	<div class="content">
		<div class="header">
			<h1 class="page-title">Modulo Seguridad</h1>
		</div>
		<div class="main-content">
			<!-- Contenido principal -->
			<ul class="nav nav-tabs">
 				<li class="active">
 					<a href="#">Listado de Accesos</a>
 				</li>
 				
			</ul>
			<div id="myTabContent" class="tab-content">
     			<div class="tab-pane active in">   
     				<!--Contenido del listado -->
     				<br/> 
     				
      				<?php include "inc_moduloseguridad/inc_moduloseguridad_query.php" ?>      

      				<?php include "inc_moduloseguridad/inc_moduloseguridad_grid.php" ?> 
     			</div>
    		</div>  
			<?php include "inc_footer.php" ?>
		</div>
	</div>
<?php include "sis_script_bootstrap.php" ?> 
  
</body>
</html>