<?php
	include("conexion.php");

	$go=$_POST["go"];
	$nom=$_POST["nombres_socios"];
	$apem=$_POST["apellidos_materno_socio"];
	$apep=$_POST["apellido_paterno_socio"];
	$est=$_POST["estado_socio"];
	$dni=$_POST["dni_socios"];
	$fec=$_POST["fnacimiento_socios"];
	$ema=$_POST["email_socios"];
	$dir=$_POST["direccion_socios"];
	$cel=$_POST["celular_socios"];
	$id=$_POST["id"];


	if($go=="delete"){
		$id=$_POST["id"];
		$sql="DELETE FROM socios WHERE idsocios=".$id;
		mysqli_query($link,$sql);
	}
	
	if($go=="create"){
		$sql="INSERT INTO socios(nombres_socios,apellidos_materno_socio,apellido_paterno_socio,estado_socio,dni_socios,fnacimiento_socios,email_socios,direccion_socios,celular_socios) VALUES('$nom','$apem','$apep','$est','$dni','$fec','$ema','$dir','$cel')";
		mysqli_query($link,$sql);
	}

	if($go=="update"){
		$sql="UPDATE socios SET nombres_socios='$nom',apellidos_materno_socio='$apem',apellido_paterno_socio='$apep',estado_socio='$est',dni_socios='$dni',fnacimiento_socios='$fec',email_socios='$ema',direccion_socios='$dir',celular_socios='$cel' WHERE idsocios='$id'";
		mysqli_query($link,$sql);
	}


?>