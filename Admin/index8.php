<?php
include("conexion_socios.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Aspaah</title>
  

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/extra_maquinarias.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/LOGO PNG.PNG" alt="Aspaah Logo" height="60" width="90">
  </div>

  <nav class="main-header navbar navbar-expand navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index2.php" class="nav-link">Home</a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="index2.php" class="brand-link">
      <img src="dist/img/LOGO PNG.PNG" alt="Aspaah Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aspaah</span>
    </a>


    <div class="sidebar">

      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>



      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Gestionar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Socios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index8.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Socio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listar_operadores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Operadores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./add_operadores.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Operador</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listar_estado_maquinaria.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estado de Maquinaria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./add_maquinaria.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Maquinaria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./listar_uso_maquinaria.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Uso de Maquinaria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./add_uso_maquinaria.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Uso de Maquinaria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./register.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar Administrador</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./dashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sistema Dashboard
                  </p>
                </a>
              </li>
              
              <li class="nav-item cerrar_sesion_boton">
                <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>

</aside>


<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Registrar Socio</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
                <li class="breadcrumb-item active">Registrar Socio</li>
            </ol>
            </div>
        </div>
        </div>
    </div>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <ul class="nav navbar-nav ">
					<li class="active"><a href="index2.php" id="botones_LA">Lista de socio</a><a href="index8.php" id="botones_LA">Agregar socio</a></li>
				</ul>
	<div class="container">
		<div class="content">
			<h2>Agregar Socio</h2>
			<hr />

			<?php
			if(isset($_POST['add'])){
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
				
			

				$cek = mysqli_query($con, "SELECT * FROM socios WHERE idsocios='$idsocios'");
				if(mysqli_num_rows($cek) == 0){
						$insert = mysqli_query($con, "INSERT INTO socios(idsocios, nombres_socios, apellidos_materno_socio, apellido_paterno_socio, dni_socios, fnacimiento_socios, email_socios, pasword_socio, direccion_socios, celular_socios, id_categoria_socio, distrito, estado_socio)
															VALUES('$idsocios','$nombres_socios','$apellidos_materno_socio','$apellido_paterno_socio','$dni_socios','$fnacimiento_socios','$email_socios', '$pasword_socio','$direccion_socios','$celular_socios','$id_categoria_socio','$distrito','$estado_socio')") or die(mysqli_error());
						if($insert){
							echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho! Los datos han sido guardados con éxito.</div>';
						}else{
							echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. No se pudo guardar los datos !</div>';
						}
				}else{
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error. Id exite!</div>';
				}
			}
			?>

			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Id</label>
					<div class="col-sm-2">
						<input type="text" name="idsocios" class="form-control" placeholder="Id" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nombres</label>
					<div class="col-sm-4">
						<input type="text" name="nombres_socios" class="form-control" placeholder="Nombres" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido Materno</label>
					<div class="col-sm-4">
						<input type="text" name="apellidos_materno_socio" class="form-control" placeholder="Apellido Materno" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido Paterno</label>
					<div class="col-sm-4">
						<input type="text" name="apellido_paterno_socio" class="form-control" placeholder="Apellido Paterno" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dni</label>
					<div class="col-sm-4">
						<input type="text" name="dni_socios" class="form-control" placeholder="Dni" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Fecha de Nacimiento</label>
					<div class="col-sm-4">
						<input type="date" name="fnacimiento_socios" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Email</label>
					<div class="col-sm-4">
						<input type="email" name="email_socios" class="form-control" placeholder="@gmail.com" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Contraseña</label>
					<div class="col-sm-4">
						<input type="text" name="pasword_socio" class="form-control" placeholder="Contraseña" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección</label>
					<div class="col-sm-3">
						<input type="text" name="direccion_socios" class="form-control" placeholder="Dirección" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Celular</label>
					<div class="col-sm-3">
						<input type="text" name="celular_socios" class="form-control" placeholder="Celular" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Categoria</label>
					<div class="col-sm-3">
						<input type="number" name="id_categoria_socio" class="form-control" placeholder="Categoria 1,2,3" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Distrito</label>
					<div class="col-sm-3">
						<input type="text" name="distrito" class="form-control" placeholder="Distrito" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Estado</label>
					<div class="col-sm-3">
						<select name="estado_socio" class="form-control">
							<option value=""> ----- </option>
                            <option value="1">Activo</option>
							<option value="2">Inactivo</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="add" class="btn btn-sm btn-primary" value="Guardar datos">
						<a href="index2.php" class="btn btn-sm btn-danger">Cancelar</a>
					</div>
				</div>
			</form>
		</div>
	</div>
        </div>
      </div>
    </section>
</div>


<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.js"></script>

<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
</body>
</html>
