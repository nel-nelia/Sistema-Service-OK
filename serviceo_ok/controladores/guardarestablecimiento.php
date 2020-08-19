<?php 

include 'conexion.php';


$Nombre=$_POST['establecimiento'];
$direccion=$_POST['direccion'];
$Telefono=$_POST['Telefono'];
$delivery=$_POST['delivery'];
$ruc=$_POST['ruc'];
$ActividadID=$_POST['ActividadID'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];  
$Distrito=$_POST['Distrito'];
$estado=$_POST['estado'];

$sql="INSERT INTO establecimiento (nombre, direccion, Telefono, Delivery, RUC, lat, lng, Distrito, Estado, ActividadID) 
VALUES ('".$Nombre."','".$direccion."','".$Telefono."','".$delivery."','".$ruc."','".$latitud."','".$longitud."','".$Distrito."','".$estado."','".$ActividadID."')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listarestablecimientos.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>
