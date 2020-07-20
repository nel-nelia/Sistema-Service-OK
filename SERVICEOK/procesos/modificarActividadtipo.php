<?php 
include '../conexion.php';

$ActividadID=$_POST['id'];

$nombre=strtoupper($_POST['Nombre']);
$flagactivo=$_POST['FlagActivo'];

$sql= "UPDATE ActividadTipo SET Nombre='$nombre',
                FlagActivo='$flagactivo' WHERE ActividadTipoID='$ActividadTipoID'";

$result=mysqli_query($con,$sql);

header('Location: ../tipoactividad.php');
mysqli_close($con);  
?>