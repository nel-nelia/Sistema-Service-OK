<?php 
include 'conexion.php';

$ActividadID=$_POST['id'];

$nombre=$_POST['Nombrea'];
$descripcion=$_POST['Descripcion'];
$flagactivo=$_POST['FlagActivo'];
$actividadTipoID=$_POST['ActividadTipoID'];

$sql= "UPDATE actividad SET Nombrea='$nombre', Descripcion='$descripcion',
                            FlagActivo='$flagactivo',
                            ActividadTipoID='$actividadTipoID' WHERE ActividadID='$ActividadID'";

$result=mysqli_query($con,$sql);

header('Location: ../vistas/listaractividad.php');
mysqli_close($con);  
?>