<?php 

  // Nos conectamos a la Base de Datos MySQL
  $con = mysqli_connect("localhost", "root", "root", "serviceok");
 
  $con = new mysqli("localhost","root","root","serviceok");
  $count = 0;
  $sql2 = "SELECT * FROM datos WHERE estado = 0";
  $result = mysqli_query($con, $sql2);
  $count = mysqli_num_rows($result);

  

?>