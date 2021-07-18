<?php
  include("conexionDasboard.php");
  $conexion=new ConexionDB();
  $cnn=$conexion->iniciarDB();

  $go=$_REQUEST['go'];

 if ($go=="pie") {
    $sql="SELECT tipo_maquinaria, COUNT(idmaquinaria) as total FROM maquinarias GROUP BY tipo_maquinaria";
    $resulset = $cnn->query($sql); 
    $rows=array();
    while($data=$resulset->fetch_array(PDO::FETCH_ASSOC)){
    $rows[]=$data;
  }
  print (json_encode($rows));
 }
 if($go=="bar"){
    $sql="SELECT 
CASE
WHEN month(fnacimiento_socios) = '01' THEN 'Enero'
WHEN month(fnacimiento_socios) = '02' THEN 'Febrero'
WHEN month(fnacimiento_socios) = '03' THEN 'Marzo'
WHEN month(fnacimiento_socios) = '04' THEN 'Abril'
WHEN month(fnacimiento_socios) = '05' THEN 'Mayo'
WHEN month(fnacimiento_socios) = '06' THEN 'Junio'
WHEN month(fnacimiento_socios) = '07' THEN 'Julio'
WHEN month(fnacimiento_socios) = '08' THEN 'Agosto'
WHEN month(fnacimiento_socios) = '09' THEN 'Septiembre'
WHEN month(fnacimiento_socios) = '10' THEN 'Octubre'
WHEN month(fnacimiento_socios) = '11' THEN 'Noviembre'
WHEN month(fnacimiento_socios) = '12' THEN 'Diciembre'
ELSE null
END as mes,
COUNT(idsocios) as caantidad FROM socios GROUP by month(fnacimiento_socios)";
    $resulset = $cnn->query($sql); 
    $rows=array();
    while($data=$resulset->fetch_array(PDO::FETCH_ASSOC)){
     $rows[]=$data;
    }
    print (json_encode($rows));
  }
   if ($go=="dis") {
    $sql="SELECT distrito,COUNT(idsocios) as total from socios GROUP by distrito";
    $resulset = $cnn->query($sql); 
    $rows=array();
    while($data=$resulset->fetch_array(PDO::FETCH_ASSOC)){
    $rows[]=$data;
  }
  print (json_encode($rows));
 }
?>