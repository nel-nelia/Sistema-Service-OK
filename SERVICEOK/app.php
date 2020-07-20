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

          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td scope='col'>" .$row['EstablecimientoID']."</td>";
            echo "<td scope='col'>" .$row['Nombre']."</td>";
            echo "<td scope='col'>" .$row['Telefono']."</td>";
            echo "<td scope='col'>" .$row['WhatsappURL']."</td>";
            echo "<td scope='col'>" .$row['Delivery']."</td>";
            echo "<td scope='col'>" .$row['Permiso']."</td>";
            echo "<td scope='col'>" .$row['RUC']."</td>";
            echo "<td scope='col'>" .$row['CoordenadaX']."</td>";
            echo "<td scope='col'>" .$row['CoordenadaY']."</td>";
            echo "<td scope='col'>" .$row['FlagActivo']."</td>";
            echo "<td scope='col'>" .$row['ActividadID']."</td>";
            echo "<td scope='col'>" .$row['RepresentanteID']."</td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
        echo "</div>";
      
        mysqli_close($con);
      
      ?> 
    
