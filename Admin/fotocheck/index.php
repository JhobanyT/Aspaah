<?php

	include('../conexion.php');
	$id=$_REQUEST["id"];
	
	$socio=mysqli_query($link,"SELECT * FROM socios WHERE idsocios=".$id);
	$row=mysqli_fetch_array($socio);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>
  </head>
  <body style="background-color: #454d55;">
  <style>
	@media print {
		.noPrint{
			display:none;
		}
	}
</style>
<br>
	<br>

	<div class="container">
      <div class="row">
      <form method="post" id="form">
	  
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >
   
   
          <div class="panel panel-success"><br>
              <h2 class="panel-title"><center><font size="5"><i class='glyphicon glyphicon-user'></i>&nbsp;REGISTRO ASOCIADO-ASPAAH&nbsp;<img src="img/logo.png" width="45px"height="40px"></font></center></h2>

            <div class="panel-body">
              <div class="row">
			  
                <div class="col-md-3 col-lg-3 " align="center"> 
				<div id="load_img" class="">
					<img class="img-responsive" src="<?php echo $row['logo_url'];?>" alt="Logo" name="imagefile">
					
				</div>
				<br>				
					<div class="row">
  						<div class="col-md-12">
							<div class="form-group noPrint">
							<input type="hidden" name="id" value="<?= $row['idsocios'] ?>">
							<input type="hidden" name="logo_url" value="<?= $row['logo_url'] ?>">
								<input class='filestyle' data-buttonText="Foto de Socio" type="file" name="imagefile" id="imagefile" onchange="upload_image(); ">
								
							</div>
						</div>
						
					</div>
				</div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-condensed">
                    <tbody>
					   <tr>
                        <td>Estado:</td>
                        <td><input type="text" class="form-control input-sm" required name="estado_socio" value="<?php echo $row['estado_socio']?>"></td>
                    </tr>
                      <tr>
                        <td class='col-md-3'>Nombres:</td>
                        <td><input type="text" class="form-control input-sm" name="nombres_socios" value="<?php echo $row['1']?>" required></td>
                      </tr>
                      <tr>
                        <td>Apellido Paterno:</td>
                        <td><input type="text" class="form-control input-sm" name="apellidos_materno_socio" value="<?php echo $row['2']?>" required></td>
                      </tr>
                      <tr>
                        <td>Apellido Materno:</td>
                        <td><input type="text" class="form-control input-sm" name="apellido_paterno_socio" value="<?php echo $row['3']?>" ></td>
                      </tr>
                      <tr>
                        <td>Dni:</td>
                        <td><input type="text" class="form-control input-sm" required name="dni_socios" value="<?php echo $row['5']?>"></td>
                      </tr>

					  <tr>
                        <td>Fecha de Nacimiento:</td>
                        <td><input type="text" class="form-control input-sm" name="fnacimiento_socios" value="<?php echo $row["6"];?>" required></td>
                      </tr>
					  <tr>
                        <td>Correo Electronico:</td>
                        <td><input type="email" class="form-control input-sm" name="email_socios" value="<?php echo $row["7"];?>" required></td>
                      </tr>
					  <tr>
                        <td>Dirección:</td>
                        <td><input type="text" class="form-control input-sm" name="direccion_socios" value="<?php echo $row["8"];?>"></td>
                      </tr>
					  <tr>
                        <td>Celular:</td>
                        <td><input type="text" class="form-control input-sm" name="celular_socios" value="<?php echo $row["9"];?>"></td>
                      </tr>
					  <tr>
                        <td>Categoria:</td>
                        <td><input type="text" class="form-control input-sm" name="id_categoria_socio" value="<?php echo $row["id_categoria_socio"];?>"></td>
                      </tr>
                   
                        
                     
                    </tbody>
                  </table>
                  
                  
                </div>
				<div class='col-md-12 noPrint' id="resultados_ajax"></div><!-- Carga los datos ajax -->
              </div>
            </div>
                 <div class="panel-footer text-center">
                    
                     
                <button type="submit" class="btn btn-sm btn-success noPrint"><i class="glyphicon glyphicon-refresh"></i> Actualizar hoja de asociados</button>

				<button onclick="imprimir();" type="submit" class="btn btn-sm btn-success noPrint"><i class="glyphicon glyphicon-print"></i>&nbsp;Imprimir Datos</button>     
				
				 
                    </div>
            
          </div>
        </div>
		</form>
      </div>

	
	<?php
	include("footer.php");
	?>
	<script>
	function imprimir(){
		window.print();
	}
	</script>
<script type="text/javascript" src=""> </script>

  </body>
</html>
<script type="text/javascript" src="bootstrap-filestyle.js"> </script>
<script>
$( "#form" ).submit(function( event ) {
  $('.guardar_datos').attr("disabled", true);
  
 var parametros = $(this).serialize();
	 $.ajax({
			type: "POST",
			url: "ajax/editar_perfil.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados_ajax").html("Mensaje: Cargando...");
			  },
			success: function(datos){
			$("#resultados_ajax").html(datos);
			$('.guardar_datos').attr("disabled", false);

		  }
	});
  event.preventDefault();
})
	
</script>

<script>
		function upload_image(){
				
				var inputFileImage = document.getElementById("imagefile");
				var file = inputFileImage.files[0];
				if( (typeof file === "object") && (file !== null) )
				{
					$("#load_img").text('Cargando...');	
					var data = new FormData();
					data.append('imagefile',file);
					
					
					$.ajax({
						url: "ajax/imagen_ajax.php",        // Url to which the request is send
						type: "POST",             // Type of request to be send, called as method
						data: data,		  // Data sent to server, a set of key/value pairs (i.e. form fields and values)
						contentType: false,       // The content type used when sending data to the server.
						cache: false,             // To unable request pages to be cached
						processData:false,        // To send DOMDocument or non processed data file it is set to false
						success: function(data)   // A function to be called if request succeeds
						{
							$("#load_img").html(data);
							
						}
					});	
					



				}
				
				
			}
    </script>

