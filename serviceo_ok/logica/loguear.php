<?php

require 'conexion.php';
session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];


$query = mysqli_query($con, "SELECT * FROM usuarios WHERE usuario ='".$usuario."' and clave ='".$clave."'");

$nr = mysqli_num_rows($query);

if($nr == 1){
    $_SESSION['username'] = $usuario;
    echo "Bienvenido:" .$usuario;
    header("Location: ../vistas/principal.php");
}else if ($nr == 0){
    echo "DATOS INCORRECTOS";
}

?>