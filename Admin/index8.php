<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Aspaah</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="dist/css/extra.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/LOGO PNG.PNG" alt="Aspaah Logo" height="60" width="90">
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


    <ul class="navbar-nav ml-auto">
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
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Registrar Socio</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index2.php">Home</a></li>
                <li class="breadcrumb-item active">Registrar Socio</li>
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
            <?php
  include("conexion.php");
?>
<div class="formulario" style="width: 60%">
<form method="post" id="formulario">
  <input type="hidden" name="go" value="create">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label class="mt-4" style="color: black">Nombres</label>
      <input type="text" class="form-control" name="nombres_socios" placeholder="Ingrese nombres" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Apellido Materno</label>
      <input type="text" class="form-control" name="apellidos_materno_socio" placeholder="Ingrese el apellido materno" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Apellido Paterno</label>
      <input type="text" class="form-control" name="apellido_paterno_socio" placeholder="Ingrese el apellido paterno" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Estado</label>
      <input type="text" class="form-control" name="estado_socio" placeholder="Activo / Inactivo" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">DNI</label>
      <input type="text" class="form-control" name="dni_socios" placeholder="Ingrese DNI" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Fecha de Nacimiento</label>
      <input type="date" class="form-control" name="fnacimiento_socios" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Correo Electrónico</label>
      <input type="email" class="form-control" name="email_socios" placeholder="Ingrese Email">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Dirección</label>
      <input type="text" class="form-control" name="direccion_socios" placeholder="Ingrese dirección" required>
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Celular</label>
      <input type="text" class="form-control" name="celular_socios" placeholder="Ingrese celular">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Registrar Socio</button>
  </fieldset>
</form>
</div>

        </div>
      </div>
    </section>
</div>
<script>
  $("#formulario").on("submit", function(event,validate) {
      event.preventDefault();
            $.ajax({
            url: "crud.php",
            type: "post",
            data: $(this).serialize(),
            beforeSend: function() {
              //$('.msg').html("<img src='img/ajax-loader.gif' />");
              console.log("Enviando formulario");
            },
        })
        .done(function(res) { 
            console.log("Los datos se han llegado");
            $.fancybox.close();
            $("#crud").load("index2.php");                                            
        })
        .fail(function (res) {                    
            console.log(res);
        });
  });
</script>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
