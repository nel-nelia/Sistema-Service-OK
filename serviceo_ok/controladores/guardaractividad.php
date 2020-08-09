<?php 

include 'conexion.php';


$Nombre=$_POST['Nombrea'];
$Descripcion=$_POST['Descripcion'];
$FlagActivo=$_POST['FlagActivo'];
$ActividadTipoID=$_POST['ActividadTipoID'];

$sql="INSERT INTO Actividad (Nombrea, Descripcion, FlagActivo, ActividadTipoID) VALUES ('$Nombre','$Descripcion','$FlagActivo','$ActividadTipoID')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listaractividad.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>