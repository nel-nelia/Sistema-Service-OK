<?php 

include 'conexion.php';


$Nombre=$_POST['Nombre'];
$FlagActivo=$_POST['FlagActivo'];


$sql="INSERT INTO ActividadTipo (Nombre, FlagActivo) VALUES ('$Nombre','$FlagActivo')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listartipo.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>