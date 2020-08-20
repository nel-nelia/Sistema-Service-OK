<?php 

include 'conexion.php';


$Nombre=$_POST['Nombre'];
$Estado=$_POST['Estado'];

$sql="INSERT INTO Actividad (Nombrea,Estado ) VALUES ('$Nombre','$Estado')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listaractividad.php');
}else{
    echo "<script>swal({title:'ERROR DE INGRESO',text:'El registro no se pudo insertar',type:'error'});</script>";
    alert ($result);
}

mysqli_close($con);


?>