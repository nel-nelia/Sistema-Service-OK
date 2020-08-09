<?php 
include 'conexion.php';
$id=$_GET['id'];

$sql= "DELETE FROM ActividadTipo  WHERE ActividadTipoID='".$id."'";

$result=mysqli_query($con,$sql);

header('Location: ../vistas/listartipo.php');
mysqli_close($con); 
 
?>