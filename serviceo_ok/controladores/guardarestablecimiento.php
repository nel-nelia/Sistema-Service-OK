<?php 

include 'conexion.php';


$Nombre=$_POST['Nombre'];
$Telefono=$_POST['Telefono'];
$WhatsappURL=$_POST['WhatsappURL'];
$Delivery=$_POST['Delivery'];
$Permiso=$_POST['Permiso'];
$RUC=$_POST['RUC'];
$CoordenadaX=$_POST['CoordenadaX'];
$CoordenadaY=$_POST['CoordenadaY'];
$FlagActivo=$_POST['FlagActivo'];
$ActividadID=$_POST['ActividadID'];
$RepresentanteID=$_POST['RepresentanteID'];

$sql="INSERT INTO establecimiento (Nombre, Telefono, WhatsappURL, Delivery, Permiso, RUC, CoordenadaX, CoordenadaY, FlagActivo, ActividadID, RepresentanteID) 
VALUES ('$Nombre','$Telefono','$WhatsappURL','$Delivery','$Permiso','$RUC','$CoordenadaX','$CoordenadaY','$FlagActivo','$ActividadID,'$RepresentanteID')";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listarestablecimiento.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>
