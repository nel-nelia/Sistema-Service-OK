<?php
$hostname="localhost";
$username="root";
$password="root";
$dbname="serviceok";

$con=mysqli_connect($hostname, $username, $password, $dbname);

if(!$con){  
    echo "<p>Error de conexion</p>";
}
else{
	echo "Conexión exitosa";
}
?>