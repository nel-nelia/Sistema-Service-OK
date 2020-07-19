<?php
$hostname="localhost";
$username="root";
$password="123456";
$dbname="serviceok";

$con=mysqli_connect($hostname, $username, $password, $dbname);

if(!$con){
    echo "<p>Error de conexion</p>";
}
else{
	echo "Conexión exitosa";
}
// mysqli_close($con);

?>