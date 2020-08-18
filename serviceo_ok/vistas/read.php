<?php

include 'conexion.php';
if(!isset($_POST['buscar']))
{

    $_POST['buscar'] = "";

    $buscar = $_POST['buscar'];
}
$buscar = $_POST['buscar'];

$SQL_READ= "SELECT * FROM ActividadTipo WHERE Nombre LIKE '%".$buscar."%'
";  

$sql_query = mysqli_query($con,$SQL_READ);


?>