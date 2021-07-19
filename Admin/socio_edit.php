<?php
  include("conexion.php");
 $id=$_REQUEST["id"];
  $query="SELECT * FROM socios WHERE idsocios=".$id;
  $socio = mysqli_query($link,$query);  
?>
<div class="formulario" style="width: 60%">
<?php
  if($data=mysqli_fetch_array($socio)){
?>
<form method="post" id="formulario">
  <input type="hidden" name="go" value="update">
  <input type="hidden" name="id" value="<?= $data[0] ?>">
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <label class="mt-4" style="color: black">Nombres</label>
      <input type="text" class="form-control" name="nombres_socios" placeholder="Ingrese nombres" required value="<?= $data[1] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Apellido Paterno</label>
      <input type="text" class="form-control" name="apellido_paterno_socio" placeholder="Ingrese el apellido paterno" required value="<?= $data[2] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Apellido Materno</label>
      <input type="text" class="form-control" name="apellidos_materno_socio" placeholder="Ingrese el apellido materno" required value="<?= $data[3] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Estado de socio</label>
      <input type="text" class="form-control" name="estado_socio" placeholder="Activo / Inactivo" required value="<?= $data[4] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">DNI</label>
      <input type="text" class="form-control" name="dni_socios" placeholder="Ingrese DNI" required value="<?= $data[5] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Fecha de Nacimiento</label>
      <input type="date" class="form-control" name="fnacimiento_socios" required value="<?= $data[6] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Correo Electrónico</label>
      <input type="email" class="form-control" name="email_socios" placeholder="Ingrese Email" value="<?= $data[7] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Dirección</label>
      <input type="text" class="form-control" name="direccion_socios" placeholder="Ingrese dirección" required value="<?= $data[8] ?>">
    </div>
    <div class="form-group">
      <label class="mt-4" style="color: black">Celular</label>
      <input type="text" class="form-control" name="celular_socios" placeholder="Ingrese celular" value="<?= $data[9] ?>">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Actualizar Socio</button>
  </fieldset>
</form>

<?php } ?>
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
            $("#crud").load("socio_list.php");                                            
        })
        .fail(function (res) {                    
            console.log(res);
        });
  });
</script>