<html>
<head>
<title>Contar con PHP</title>
</head>
<body>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d16130082.762667097!2d-75.01951444999999!3d-9.24353845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1598334524064!5m2!1ses!2spe" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


<?php
require("conexion.php");
$con = new mysqli("localhost","root","123456","serviceok");
$count = current($con->query("SELECT SUM(usuario) as usu FROM usuarios"));
echo "VALOR: ".$count; 
?>
</body>
</html>