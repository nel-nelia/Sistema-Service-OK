<?php

  // Archivo de Conexión a la Base de Datos 
  include('conexion.php');

  // Listamos las direcciones con todos sus datos (lat, lng, dirección, etc.)
  $query = mysqli_query($sql, "SELECT * FROM Establecimiento");

  // Seleccionamos los datos para crear los marcadores en el Mapa de Google serian direccion, lat y lng 
  while ($row = mysqli_fetch_array($query)) {
      echo '["' . $row['whatsappurl'] . '", ' . $row['cordenadasx'] . ', ' . $row['cordenadasy'] . '],';
  }
?>