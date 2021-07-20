<?php
include("conexion_maquinaria.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Datos de Socio</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style_nav.css" rel="stylesheet">
	<link rel="stylesheet" href="dist/css/extra_maquinarias.css">
	<style>
		.content {
			margin-top: 80px;
		}
	</style>
</head>
<body class=color_body>
<ul class="nav navbar-nav ">
					<li><a href="listar_uso_maquinaria.php" class="active" id="botones_LA">Lista Uso de maquinarias</a><a href="add_uso_maquinaria.php" id="botones_LA">Agregar Uso de Maquinaria</a></li>
				</ul>
	<div class="container">
		<div class="content">
			<h2>Datos socio Perfil</h2>
			<hr />
			
			<?php
			$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
			
			$sql = mysqli_query($con, "SELECT * FROM socios WHERE idsocios='$nik'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: listar_uso_maquinaria.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			
			if(isset($_GET['aksi']) == 'delete'){
				$delete = mysqli_query($con, "DELETE FROM socios WHERE idsocios='$nik'");
				if($delete){
					echo '<div class="alert alert-danger alert-dismissable">><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil dihapus.</div>';
				}else{
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal dihapus.</div>';
				}
			}
			?>
			
			<table class="table table-striped table-condensed">
				<tr>
					<th width="10%">Id</th>
					<td><?php echo $row['idsocios']; ?></td>
				</tr>
				<tr>
					<th>Nombres</th>
					<td><?php echo $row['nombres_socios']; ?></td>
				</tr>
				<tr>
					<th>Apellidos</th>
					<td><?php echo $row['apellido_paterno_socio'].' '.$row['apellidos_materno_socio']; ?></td>
				</tr>
				<tr>
					<th>Estado</th>
					<td><?php echo $row['estado_socio']; ?></td>
				</tr>
				<tr>
					<th>Dni</th>
					<td><?php echo $row['dni_socios']; ?></td>
				</tr>
				<tr>
					<th>Fecha Nacimiento</th>
					<td><?php echo $row['fnacimiento_socios']; ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td><?php echo $row['email_socios']; ?></td>
				</tr>
				<tr>
					<th>Dirección</th>
					<td><?php echo $row['direccion_socios']; ?></td>
				</tr>
				<tr>
					<th>n° Celular</th>
					<td><?php echo $row['celular_socios']; ?></td>
				</tr>
			</table>
			
			<a href="listar_uso_maquinaria.php" class="btn btn-sm btn-info"><span aria-hidden="true"></span> Regresar</a>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>