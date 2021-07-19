<?php
	/*Inicia validacion del lado del servidor*/
	if (empty($_POST['estado_socio'])) {
           $errors[] = "Estado de socio esta vacio";
		}else if (empty($_POST['nombres_socios'])) {
			$errors[] = "Nombres esta vacio";
        }else if (empty($_POST['apellidos_materno_socio'])) {
           $errors[] = "Apellido paterno esta vacío";
        } else if (empty($_POST['apellido_paterno_socio'])) {
           $errors[] = "Apellido materno esta vacío";
        } else if (empty($_POST['dni_socios'])) {
           $errors[] = "Dni esta vacio";
        } else if (empty($_POST['fnacimiento_socios'])) {
           $errors[] = "Fecha de nacimiento esta vacío";
		} else if (empty($_POST['email_socios'])) {
			$errors[] = "Correo Electronico esta vacío";
		} else if (empty($_POST['direccion_socios'])) {
			$errors[] = "Dirección esta vacío";
		} else if (empty($_POST['celular_socios'])) {
			$errors[] = "Celular esta vacío";
		} else if (empty($_POST['id_categoria_socio'])) {
			$errors[] = "Categoria de socio esta vacío";

        }   else if (
			!empty($_POST['estado_socio']) &&
			!empty($_POST['nombres_socios']) &&
			!empty($_POST['apellidos_materno_socio']) &&
			!empty($_POST['apellido_paterno_socio']) &&
			!empty($_POST['dni_socios']) &&
			!empty($_POST['fnacimiento_socios']) &&
			!empty($_POST['email_socios']) &&
			!empty($_POST['direccion_socios']) &&
			!empty($_POST['celular_socios']) &&
			!empty($_POST['id_categoria_socio'])
		){
		/* Connect To Database*/
		include("../../conexion_socios.php");
		// escaping, additionally removing everything that could be (html/javascript-) code
		$id=mysqli_real_escape_string($con,(strip_tags($_POST["id"],ENT_QUOTES)));
		$ns=mysqli_real_escape_string($con,(strip_tags($_POST["nombres_socios"],ENT_QUOTES)));
		$am=mysqli_real_escape_string($con,(strip_tags($_POST["apellidos_materno_socio"],ENT_QUOTES)));
		$ap=mysqli_real_escape_string($con,(strip_tags($_POST["apellido_paterno_socio"],ENT_QUOTES)));
		$ds=mysqli_real_escape_string($con,(strip_tags($_POST["dni_socios"],ENT_QUOTES)));
		$fs=mysqli_real_escape_string($con,(strip_tags($_POST["fnacimiento_socios"],ENT_QUOTES)));
		$es=mysqli_real_escape_string($con,(strip_tags($_POST["email_socios"],ENT_QUOTES)));
		$dss=mysqli_real_escape_string($con,(strip_tags($_POST["direccion_socios"],ENT_QUOTES)));
		$cs=mysqli_real_escape_string($con,(strip_tags($_POST["celular_socios"],ENT_QUOTES)));
		$ic=mysqli_real_escape_string($con,(strip_tags($_POST["id_categoria_socio"],ENT_QUOTES)));
		$logo_update=mysqli_real_escape_string($con,(strip_tags($_POST["logo_url"],ENT_QUOTES)));
		
		$sql="UPDATE socios SET nombres_socios='".$ns."', apellidos_materno_socio='".$am."', apellido_paterno_socio='".$ap."', dni_socios='".$ds."', fnacimiento_socios='".$fs."', email_socios='".$es."', direccion_socios='".$dss."', celular_socios='".$cs."', id_categoria_socio='".$ic."',logo_url='".$logo_update."' WHERE idsocios='$id'";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Datos han sido actualizados satisfactoriamente.";
                                                       
        
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.".mysqli_error($con);
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>
<script>

        
            $("#crud").load("socio_list.php");                                            
    

</script>