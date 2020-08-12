<?php 
include 'conexion.php';
$id=$_GET['id'];

$sql= "DELETE FROM usuarios  WHERE usuario='".$id."'";

$result=mysqli_query($con,$sql);

header('Location: ../vistas/listaradministrador.php');
mysqli_close($con); 
 
?>