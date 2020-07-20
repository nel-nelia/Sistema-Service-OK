<?php 
include '../conexion.php';

$RepresentanteID=$_POST['id'];
$RUC=$_POST['RUC'];
$CorreoEmpresarial=strtoupper($_POST['CorreoEmpresarial']);

$sql= "UPDATE Representante SET RUC='$RUC',
                CorreoEmpresarial='$CorreoEmpresarial' WHERE RepresentanteID='$RepresentanteID'";

$result=mysqli_query($con,$sql);

header('Location: ../representante.php');
mysqli_close($con);  
?>