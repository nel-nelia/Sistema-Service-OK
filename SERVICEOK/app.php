<?php
include('conexion.php');

$result = mysqli_query($con, "SELECT * FROM Establecimiento");
//listamos las direcciones con todos sus datos 

// Creamos una tabla para listar los datos 
echo "<div class='table-responsive'>";

echo "<table class='table'>
<thead class='thead-dark'>
  <tr>
    <th scope='col'>N°</th>
    <th scope='col'>Nombre</th>
    <th scope='col'>Telefono</th>
    <th scope='col'>WhatsappURL</th>
    <th scope='col'>Delivery</th>
    <th scope='col'>Permiso</th>
    <th scope='col'>RUC</th>
    <th scope='col'>CoordenadaX</th>
    <th scope='col'>CoordenadaY</th>
    <th scope='col'>FlagActivo</th>
    <th scope='col'>ActividadID</th>
    <th scope='col'>RepresentanteID</th>
  </tr>
  </thead>
  <tbody>";

          while ($row = MySQLI_fetch_array($result)) {
            $actividadid=$row['EstablecimientoID'];
            $nombre=$row['Nombre'];
            $flagactivo=$row['Telefono'];
            $actividadid=$row['WhatsappURL'];
            $nombre=$row['Delivery'];
            $flagactivo=$row['Permiso'];
            $actividadid=$row['RUC'];
            $nombre=$row['CoordenadaX'];
            $flagactivo=$row['CoordenadaY'];
            $actividadid=$row['FlagActivo'];
            $nombre=$row['ActividadID'];
            $flagactivo=$row['RepresentanteID'];
            
        }
        echo "</tbody></table>";
        echo "</div>";
      
        mysqli_close($con);
      
      ?> 
    
