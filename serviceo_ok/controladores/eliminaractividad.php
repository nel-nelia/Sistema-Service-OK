<?php 
include 'conexion.php';
$id=$_GET['id'];

$sql= "DELETE FROM actividad  WHERE ActividadID='".$id."'";

$result=mysqli_query($con,$sql);

header('Location: ../vistas/listaractividad.php');
mysqli_close($con); 
 
?>