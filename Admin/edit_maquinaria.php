<?php
include("conexion_maquinaria.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Aspaah</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/extra_maquinarias.css">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
	<div class="container">
	<ul class="nav navbar-nav ">
		<li><a href="listar_estado_maquinaria.php" class="active edit_buton edit_buton_2" id="botones_LA">Lista de Maquinarias</a><a class="edit_buton" href="add_maquinaria.php" id="botones_LA">Agregar Una Maquinaria</a></li>
		</ul>
		<div class="content">
			<h2>Editar Datos de Maquinaria</h2>
			<hr />
			
			<?php
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM maquinarias WHERE idmaquinaria='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: listar_estado_maquinaria.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$idmaquinaria		     = mysqli_real_escape_string($con,(strip_tags($_POST["idmaquinaria"],ENT_QUOTES)));
				$modelo_maquinaria		     = mysqli_real_escape_string($con,(strip_tags($_POST["modelo_maquinaria"],ENT_QUOTES)));
				$potencia_maquinaria	 = mysqli_real_escape_string($con,(strip_tags($_POST["potencia_maquinaria"],ENT_QUOTES)));
				$descripcion_maquinaria	 = mysqli_real_escape_string($con,(strip_tags($_POST["descripcion_maquinaria"],ENT_QUOTES)));//Escanpando caracteres 
				$cilindro_maquinaria	     = mysqli_real_escape_string($con,(strip_tags($_POST["cilindro_maquinaria"],ENT_QUOTES)));//Escanpando caracteres 
				$tipo_maquinaria		 = mysqli_real_escape_string($con,(strip_tags($_POST["tipo_maquinaria"],ENT_QUOTES)));//Escanpando caracteres 
				$estado			 = mysqli_real_escape_string($con,(strip_tags($_POST["estado"],ENT_QUOTES)));//Escanpando caracteres  
				
				$update = mysqli_query($con, "UPDATE maquinarias SET modelo_maquinaria='$modelo_maquinaria', potencia_maquinaria='$potencia_maquinaria', descripcion_maquinaria='$descripcion_maquinaria', cilindro_maquinaria='$cilindro_maquinaria', tipo_maquinaria='$tipo_maquinaria', estado='$estado' WHERE idmaquinaria='$nik'") or die(mysqli_error());
				if($update){
					header("Location: edit_maquinaria.php?nik=".$nik."&pesan=sukses");
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo guardar los datos.</div>';
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Los datos han sido guardados con éxito.</div>';
			}
			?>
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id</label>
					<div class="col-sm-2">
						<input type="text" name="idmaquinaria" value="<?php echo $row ['idmaquinaria']; ?>" class="form-control" placeholder="Id" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Modelo</label>
					<div class="col-sm-4">
						<input type="text" name="modelo_maquinaria" value="<?php echo $row ['modelo_maquinaria']; ?>" class="form-control" placeholder="Modelo de maquinaria" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Potencia</label>
					<div class="col-sm-4">
						<input type="text" name="potencia_maquinaria" value="<?php echo $row ['potencia_maquinaria']; ?>" class="form-control" placeholder="Potencia de maquinaria" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Descripción</label>
					<div class="col-sm-3">
						<textarea name="descripcion_maquinaria" class="form-control" placeholder="Descripción"><?php echo $row ['descripcion_maquinaria']; ?></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Cilindros</label>
					<div class="col-sm-3">
						<input type="text" name="cilindro_maquinaria" value="<?php echo $row ['cilindro_maquinaria']; ?>" class="form-control" placeholder="Cilindros de maquinaria" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Tipo</label>
					<div class="col-sm-3">
						
						<input type="text" name="tipo_maquinaria" value="<?php echo $row ['tipo_maquinaria']; ?>" class="form-control" placeholder="Tipo de maquinaria" required>
					</div>
                    
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="col-sm-3">
						<select name="estado" class="form-control">
							<option value="">- Selecciona estado -</option>
                            <option value="1" <?php if ($row ['estado']==1){echo "selected";} ?>>Disponible</option>
							<option value="2" <?php if ($row ['estado']==2){echo "selected";} ?>>En Uso</option>
							<option value="3" <?php if ($row ['estado']==3){echo "selected";} ?>>Reparación</option>
						</select> 
					</div>

                </div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" id="guardar_style" value="Guardar">
						<a href="listar_estado_maquinaria.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
</body>
</html>
