<?php 
include 'conexion.php';

$id=$_GET['id'];

$sql= "DELETE FROM establecimiento  WHERE id='".$id."'";

$result=mysqli_query($con,$sql);

header('Location: ../vistas/listarestablecimiento.php');
mysqli_close($con); 
 
?>