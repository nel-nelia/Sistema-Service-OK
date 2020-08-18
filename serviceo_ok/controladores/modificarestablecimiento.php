<?php 

include 'conexion.php';
$establecimientoID=$_POST['id'];

$Nombre=$_POST['Nombre'];
$direccion=$_POST['direccion'];
$Telefono=$_POST['Telefono'];
$delivery=$_POST['delivery'];
$ruc=$_POST['ruc'];
$ActividadID=$_POST['ActividadID'];
$latitud=$_POST['latitud'];
$longitud=$_POST['longitud'];  
$Distrito=$_POST['Distrito'];
$estado=$_POST['estado'];

$sql="UPDATE establecimiento SET nombre='$Nombre',direccion='$direccion', Telefono='$Telefono', Delivery='$delivery', RUC='$ruc',
                                 lat='$latitud', lng='$longitud', Distrito='$Distrito', Estado='$estado', ActividadID='$ActividadID' WHERE id='$establecimientoID' ";

$result = MYSQLI_query($con, $sql);


if ($result) {
    header('Location: ../vistas/listarestablecimiento.php');
}else{
    echo "ERROR DE INGRESO";
}

mysqli_close($con);

?>