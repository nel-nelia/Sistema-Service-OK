<?php 

include 'conexion.php';


$Nombre=$_POST['Nombre'];
$Estado=$_POST['Estado'];


$sql="INSERT INTO ActividadTipo (Nombre, Estado) VALUES ('$Nombre','$Estado')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listartipo.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>