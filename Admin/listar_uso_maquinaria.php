<?php
include("conexion_maquinaria.php");
?>
<!DOCTYPE html>
<html lang="en">
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
  <link href="fontawesonme/css/font-awesome.css" rel="stylesheet">
  <link href="css/bootstrap-datepicker.css" rel="stylesheet">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/extra.css">
  
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/LOGO PNG.PNG" alt="Aspaah Logo" height="60" width="90">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index2.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index2.php" class="brand-link">
      <img src="dist/img/LOGO PNG.PNG" alt="Aspaah Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aspaah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user8-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
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
                <a href="./listar_uso_maquinaria.php" class="nav-link active">
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
                <a href="./index8.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editar Uso de Maquinaria</p>
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./plantillaDashboard.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Socios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./plantillaDashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estado de Maquinaria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./plantillaDashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Maquinaria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./plantillaDashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Uso de Maquinaria</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./plantillaDashboard.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agregar Uso de Maquinaria</p>
                </a>
              </li>
              <li class="nav-item cerrar_sesion_boton">
                <a href="cerrar-sesion.php" class="close-sesion">Cerrar Sesión</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Estado de maquinariasu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
              <li class="breadcrumb-item active">Estado de maquinariasu</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
        <ul class="nav navbar-nav ">
					<li><a href="listar_uso_maquinaria.php" class="active" id="botones_LA">Lista de Uso maquinariasu</a><a href="add_uso_maquinaria.php" id="botones_LA">Agregar Una Maquinaria</a></li>
				</ul>
        <div class="container">
		  <div class="content">
			<h2>Lista de maquinariasu</h2>
			<hr />

			<?php
			if(isset($_GET['aksi']) == 'delete'){
				// escaping, additionally removing everything that could be (html/javascript-) code
				$nik = mysqli_real_escape_string($con,(strip_tags($_GET["nik"],ENT_QUOTES)));
				$cek = mysqli_query($con, "SELECT * FROM maquinariasu WHERE id_maquinariau='$nik'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
				}else{
					$delete = mysqli_query($con, "DELETE FROM maquinariasu WHERE id_maquinariau='$nik'");
					if($delete){
						echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Datos eliminado correctamente.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los datos.</div>';
					}
				}
			}
			?>

			<form class="form-inline" method="get">
				<div class="form-group">
					<select name="filter" class="form-control" onchange="form.submit()">
						<option value="0">Filtros de datos de maquinariasu</option>
						<?php $filter = (isset($_GET['filter']) ? strtolower($_GET['filter']) : NULL);  ?>
						<option value="1" <?php if($filter == 'Tetap'){ echo 'selected'; } ?>>Disponible</option>
						<option value="2" <?php if($filter == 'Kontrak'){ echo 'selected'; } ?>>En Uso</option>
                        <option value="3" <?php if($filter == 'Outsourcing'){ echo 'selected'; } ?>>Reparación</option>
					</select>
				</div>
			</form>
			<br />
			<div class="table-responsive">
			<table class="table table-striped table-hover">
				<tr>
					<th>Id</th>
					<th>Id Socio</th>
          <th>Id maquinaria</th>
          <th>Id operadpr</th>
					<th>Fecha de Uso</th>
				</tr>
				<?php
				if($filter){
					$sql = mysqli_query($con, "SELECT * FROM maquinariasu WHERE estado='$filter' ORDER BY id_maquinariau ASC");
				}else{
					$sql = mysqli_query($con, "SELECT * FROM maquinariasu ORDER BY id_maquinariau ASC");
				}
				if(mysqli_num_rows($sql) == 0){
					echo '<tr><td colspan="8">No hay datos.</td></tr>';
				}else{
					while($row = mysqli_fetch_assoc($sql)){
						echo '
						<tr>
							<td>'.$row['id_maquinariau'].'</td>
							<td>'.$row['idsocios'].'</td>
              <td>'.$row['idmaquinaria'].'</td>
              <td>'.$row['idoperador'].'</td>
							<td>'.$row['fecha_uso'].'</td>
						echo
							<td>

								<a href="edit_uso_maquinaria.php?nik='.$row['id_maquinariau'].'" title="Editar datos" class="btn btn-primary btn-sm editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
								<a href="listar_uso_maquinaria.php?aksi=delete&nik='.$row['id_maquinariau'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['idsocios'].'?\')" class="btn btn-danger btn-sm borrar"><i class="fa fa-trash" aria-hidden="true"></i></a>
							</td>
						</tr>
						';
					}
				}
				?>
			</table>
			</div>
		</div>
    </section>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
          <!-- /.col -->
        
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
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
<script src="js/bootstrap-datepicker.js"></script>
</body>
</html>