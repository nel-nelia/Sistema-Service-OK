<?php 
include 'conexion.php';

$ActividadID=$_POST['id'];
$nombre=$_POST['Nombre'];
$flagactivo=$_POST['FlagActivo'];

$sql= "UPDATE actividadtipo SET Nombre='$nombre',FlagActivo='$flagactivo' WHERE ActividadTipoID='$ActividadID'";

$result=mysqli_query($con,$sql);

header('Location: ../vistas/listartipo.php');
mysqli_close($con); 
 
?>