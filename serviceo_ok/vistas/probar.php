<html>
<head>
<title>Contar con PHP</title>
</head>
<body>
<?php
require("conexion.php");
$con = new mysqli("localhost","root","root","serviceok");
$count = current($con->query("SELECT SUM(usuario) as usu FROM usuarios"));
echo "VALOR: ".$count; 
?>
</body>
</html>