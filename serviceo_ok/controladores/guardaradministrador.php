<?php 

include 'conexion.php';


$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$sql="INSERT INTO usuarios (usuario, clave) VALUES ('$usuario','$clave')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/vistadministrador.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>