<?php 
include '../conexion.php';

$ActividadID=$_POST['id'];

$nombre=strtoupper($_POST['Nombre']);
$descripcion=strtoupper($_POST['Descripcion']);
$flagactivo=$_POST['FlagActivo'];
$actividadTipoID=$_POST['ActividadTipoID'];

$sql= "UPDATE Actividad SET Nombre='$nombre',
                            Descripcion='$descripcion',
                            FlagActivo='$flagactivo',
                            actividadTipoID='$actividadTipoID' WHERE ActividadID='$ActividadID'";

$result=mysqli_query($con,$sql);

header('Location: ../actividad.php');
mysqli_close($con);  
?>