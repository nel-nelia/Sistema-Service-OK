<?php 
include 'conexion.php';

$ActividadID=$_POST['id'];

$nombre=$_POST['Nombrea'];
$estado=$_POST['estado'];

$sql= "UPDATE actividad SET Nombrea='$nombre', Estado='$estado' WHERE ActividadID='$ActividadID'";

$result=mysqli_query($con,$sql);

header('Location: ../vistas/listaractividad.php');
mysqli_close($con);  
?>