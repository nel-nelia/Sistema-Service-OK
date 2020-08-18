<?php 

include 'conexion.php';


$Nombre=$_POST['registrousuarioID'];
$direccion=$_POST['direccion'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];  
$departamento=$_POST['Departamento'];

$sql="INSERT INTO google_maps_php_mysql (nombre, direccion, lat, lng, pais) 
VALUES ('".$Nombre."','".$direccion."','".$latitud."','".$longitud."','".$departamento."')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listarestablecimiento.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>
