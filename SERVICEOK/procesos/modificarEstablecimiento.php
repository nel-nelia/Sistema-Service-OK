<?php 
include '../conexion.php';

$EstablecimientoID=$_POST['id'];

$nombre=strtoupper($_POST['Nombre']);
$telefono=$_POST['Telefono'];
$whatsappurl=strtoupper($_POST['WhatsappURL']);
$delivery=$_POST['Delivery'];
$permiso=$_POST['Permiso'];
$ruc=$_POST['RUC'];
$cordenadax=strtoupper($_POST['CoordenadaX']);
$cordenaday=strtoupper($_POST['CoordenadaY']);
$flagactivo=$_POST['FlagActivo'];
$actividadid=$_POST['ActividadID'];
$representanteid=$_POST['RepresentanteID'];

$sql= "UPDATE Establecimiento SET Nombre='$nombre',
                            Telefono='$telefono',
                            WhatsappURL='$whatsappurl',
                            Delivery='$delivery',
                            Permiso='$permiso',
                            RUC='$ruc',
                            CoordenadaX='$cordenadax',
                            CoordenadaY='$cordenaday',
                            FlagActivo='$flagactivo',
                            ActividadID='$actividadid',
                            RepresentanteID='$representanteid' WHERE EstablecimientoID='$EstablecimientoID'";

$result=mysqli_query($con,$sql);

header('Location: ../establecimiento.php');
mysqli_close($con);  
?>