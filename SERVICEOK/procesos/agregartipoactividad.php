<?php 

include '../conexion.php';


$Nombre=$_POST['Nombre'];
$FlagActivo=$_POST['FlagActivo'];

$sql="INSERT INTO ActividadTipo (Nombre, FlagActivo) VALUES ('$Nombre','$FlagActivo')";

$result = MYSQLI_query($con, $sql);
header('Location: ../tipoactividad.php');

mysqli_close($con);

?>