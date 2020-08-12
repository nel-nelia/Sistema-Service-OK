<?php 
include 'conexion.php';

$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


$sql= "UPDATE usuarios SET Nombre='$usuario',FlagActivo='$clave' WHERE usuario='$usuario'";

$result=mysqli_query($con,$sql);

header('Location: ../vistas/listaradministrador.php');
mysqli_close($con); 
 
?>