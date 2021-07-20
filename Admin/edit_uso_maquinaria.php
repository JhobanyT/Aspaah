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

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min.css">
<link rel="stylesheet" href="dist/css/extra_maquinarias.css">

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
					<li><a href="listar_uso_maquinaria.php" class="active" id="botones_LA">Lista Uso de maquinarias</a><a href="add_uso_maquinaria.php" id="botones_LA">Agregar Uso de Maquinaria</a></li>
				</ul>
		<div class="content">
			<h2>Editar Datos de Uso Maquinaria</h2>
			<hr />
			
			<?php
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM maquinariasu WHERE id_maquinariau='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: listar_uso_maquinaria.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$id_maquinariau		     = mysqli_real_escape_string($con,(strip_tags($_POST["id_maquinariau"],ENT_QUOTES)));
				$idsocios		     = mysqli_real_escape_string($con,(strip_tags($_POST["idsocios"],ENT_QUOTES)));
				$idmaquinaria	 = mysqli_real_escape_string($con,(strip_tags($_POST["idmaquinaria"],ENT_QUOTES)));
				$idoperador	 = mysqli_real_escape_string($con,(strip_tags($_POST["idoperador"],ENT_QUOTES)));
				$fecha_uso	     = mysqli_real_escape_string($con,(strip_tags($_POST["fecha_uso"],ENT_QUOTES)));
				
				$update = mysqli_query($con, "UPDATE maquinariasu SET idsocios='$idsocios', idmaquinaria='$idmaquinaria', idoperador='$idoperador', fecha_uso='$fecha_uso'") or die(mysqli_error());
				if($update){
					header("Location: edit_uso_maquinaria.php?nik=".$nik."&pesan=sukses");
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
						<input type="text" name="id_maquinariau" value="<?php echo $row ['id_maquinariau']; ?>" class="form-control" placeholder="Id" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Socio</label>
					<div class="col-sm-4">
						<input type="text" name="idsocios" value="<?php echo $row ['idsocios']; ?>" class="form-control" placeholder="id socio" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Id maquinaria</label>
					<div class="col-sm-4">
						<input type="text" name="idmaquinaria" value="<?php echo $row ['idmaquinaria']; ?>" class="form-control" placeholder="Id maquinaria" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Id Operador</label>
					<div class="col-sm-3">
						<input type="text" name="idoperador" value="<?php echo $row ['idoperador']; ?>" class="form-control" placeholder="Id operador" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de Uso</label>
					<div class="col-sm-3">
						<input type="text" name="fecha_uso" value="<?php echo $row ['fecha_uso']; ?>" class="form-control" placeholder="00-00-0000" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" id="guardar_style" value="Guardar">
						<a href="listar_uso_maquinaria.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="dist/js/adminlte.js"></script>
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
</body>
</html>
