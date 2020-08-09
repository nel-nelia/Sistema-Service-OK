<?php 

include 'conexion.php';

$ruc=$_POST['ruc'];
$nombrerepresentante=$_POST['nombrerepresentante'];
$apellidorepresentante=$_POST['apellidorepresentante'];
$nombreestablecimiento=$_POST['nombreestablecimiento'];
$phone=$_POST['phone'];
$Email=$_POST['Email'];
$direccion=$_POST['direccion'];

$sql="INSERT INTO RegistroUsuario (ruc, nombrerepresentante, apellidorepresentante, nombreestablecimiento, phone,Email,direccion ) 
VALUES ('$ruc','$nombrerepresentante','$apellidorepresentante','$nombreestablecimiento','$phone','$Email','$direccion')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listaregistro.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>