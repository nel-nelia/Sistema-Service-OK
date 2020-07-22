<?php 

include '../conexion.php';


$Nombre=$_POST['Nombre'];
$Descripcion=$_POST['Descripcion'];
$FlagActivo=$_POST['FlagActivo'];
$ActividadTipoID=$_POST['ActividadTipoID'];

$sql="INSERT INTO Actividad (Nombre, Descripcion, FlagActivo, ActividadTipoID) VALUES ('$Nombre','$Descripcion','$FlagActivo','$ActividadTipoID')";

$result = MYSQLI_query($con, $sql);

if ($sql) {
    echo "gggggggggggggg";
}else{
    echo "NOOOOOOOOOOO";
}

$result = MYSQLI_query($con, $sql);
header('Location: ../actividad.php');
mysqli_close($con);

?>