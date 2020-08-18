<?php 

include 'conexion.php';


$Nombre=$_POST['Nombre'];
$Estado=$_POST['Estado'];

$sql="INSERT INTO Actividad (Nombrea,Estado ) VALUES ('$Nombre','$Estado')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listaractividad.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>