<?php
include("conexion_socios.php");
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
                <ul class="nav navbar-nav ">
					<li class="active"><a href="index2.php" id="botones_LA">Lista de socio</a><a href="index8.php" id="botones_LA">Agregar socio</a></li>
				</ul>
	<div class="container">
		<div class="content">
			<h2>Editar datos del socio</h2>
			<hr />
			
			<?php
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			$sql = mysqli_query($con, "SELECT * FROM socios WHERE idsocios='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: index2.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){
				$idsocios		     = mysqli_real_escape_string($con,(strip_tags($_POST["idsocios"],ENT_QUOTES)));
				$nombres_socios		     = mysqli_real_escape_string($con,(strip_tags($_POST["nombres_socios"],ENT_QUOTES)));
				$apellidos_materno_socio	 = mysqli_real_escape_string($con,(strip_tags($_POST["apellidos_materno_socio"],ENT_QUOTES)));
				$apellido_paterno_socio	 = mysqli_real_escape_string($con,(strip_tags($_POST["apellido_paterno_socio"],ENT_QUOTES)));
				$dni_socios	     = mysqli_real_escape_string($con,(strip_tags($_POST["dni_socios"],ENT_QUOTES)));
				$fnacimiento_socios		 = mysqli_real_escape_string($con,(strip_tags($_POST["fnacimiento_socios"],ENT_QUOTES)));
				$email_socios		 = mysqli_real_escape_string($con,(strip_tags($_POST["email_socios"],ENT_QUOTES)));
				$pasword_socio		 = mysqli_real_escape_string($con,(strip_tags($_POST["pasword_socio"],ENT_QUOTES)));
				$direccion_socios		 = mysqli_real_escape_string($con,(strip_tags($_POST["direccion_socios"],ENT_QUOTES)));
				$celular_socios		 = mysqli_real_escape_string($con,(strip_tags($_POST["celular_socios"],ENT_QUOTES)));
				$id_categoria_socio 		 = mysqli_real_escape_string($con,(strip_tags($_POST["id_categoria_socio"],ENT_QUOTES)));
				$distrito 		 = mysqli_real_escape_string($con,(strip_tags($_POST["distrito"],ENT_QUOTES)));
				$estado_socio			 = mysqli_real_escape_string($con,(strip_tags($_POST["estado_socio"],ENT_QUOTES)));
				
				$update = mysqli_query($con, "UPDATE socios SET nombres_socios='$nombres_socios', apellidos_materno_socio='$apellidos_materno_socio', apellido_paterno_socio='$apellido_paterno_socio', dni_socios='$dni_socios', fnacimiento_socios='$fnacimiento_socios', email_socios='$email_socios', pasword_socio='$pasword_socio', direccion_socios='$direccion_socios', celular_socios='$celular_socios', id_categoria_socio='$id_categoria_socio', distrito='$distrito', estado_socio='$estado_socio' WHERE idsocios='$nik'") or die(mysqli_error());
				if($update){
					header("Location: edit.php?nik=".$nik."&pesan=sukses");
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
						<input type="text" name="idsocios" value="<?php echo $row ['idsocios']; ?>" class="form-control" placeholder="NIK" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">nombres</label>
					<div class="col-sm-4">
						<input type="text" name="nombres_socios" value="<?php echo $row ['nombres_socios']; ?>" class="form-control" placeholder="nombres" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido Materno</label>
					<div class="col-sm-4">
						<input type="text" name="apellidos_materno_socio" value="<?php echo $row ['apellidos_materno_socio']; ?>" class="form-control" placeholder="Apellido Materno" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido Paterno</label>
					<div class="col-sm-4">
						<input type="text" name="apellido_paterno_socio" value="<?php echo $row ['apellido_paterno_socio']; ?>" class="form-control" placeholder="Apellido Paterno" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dni</label>
					<div class="col-sm-4">
						<input type="text" name="dni_socios" value="<?php echo $row ['dni_socios']; ?>" class="form-control" placeholder="Dni" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de Nacimiento</label>
					<div class="col-sm-3">
						<input type="date" name="fnacimiento_socios" value="<?php echo $row ['fnacimiento_socios']; ?>" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-3">
						<input type="email" name="email_socios" value="<?php echo $row ['email_socios']; ?>" class="form-control" placeholder="@gmail.com" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Contraseña</label>
					<div class="col-sm-3">
						
						<input type="password" name="pasword_socio" value="<?php echo $row ['pasword_socio']; ?>" class="form-control" placeholder="Contraseña" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección</label>
					<div class="col-sm-3">
						
						<input type="text" name="direccion_socios" value="<?php echo $row ['direccion_socios']; ?>" class="form-control" placeholder="Dirección" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Celular</label>
					<div class="col-sm-3">
						
						<input type="text" name="celular_socios" value="<?php echo $row ['celular_socios']; ?>" class="form-control" placeholder="Celular" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Categoria</label>
					<div class="col-sm-3">
						
						<input type="text" name="id_categoria_socio" value="<?php echo $row ['id_categoria_socio']; ?>" class="form-control" placeholder="Categoria" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Distrito</label>
					<div class="col-sm-3">
						<input type="text" name="distrito" value="<?php echo $row ['distrito']; ?>" class="form-control" placeholder="Distrito" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">estado_socio</label>
					<div class="col-sm-3">
						<select name="estado_socio" class="form-control">
							<option value="">- Selecciona estado de socio -</option>
                            <option value="1" <?php if ($row ['estado_socio']==1){echo "selected";} ?>>Activo</option>
							<option value="2" <?php if ($row ['estado_socio']==2){echo "selected";} ?>>Inactivo</option>
						</select> 
					</div>
                </div>
			
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index2.php" class="btn btn-sm btn-danger">Cancelar</a>
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