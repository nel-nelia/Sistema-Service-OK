<?php

    
	$servername = "localhost";
    $username = "root";
  	$password = "123456";
  	$dbname = "serviceok";

	$con = new mysqli($servername, $username, $password, $dbname);
      if($con->connect_error){
        die("Conexión fallida: ".$con->connect_error);
      } 
 
    $salida = "";

    $query = "SELECT * FROM google_maps_php_mysql WHERE Name NOT LIKE '' ORDER By id LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $con->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM google_maps_php_mysql WHERE id LIKE '%$q%' OR Name LIKE '%$q%' OR nombre LIKE '%$q%' OR direcccion LIKE '%$q%' OR lat LIKE '%$q%' OR lng LIKE '%$q%' OR pais LIKE '$q' ";
    }

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>ID</td>
    					<td>JUGADOR</td>
    					<td>CLUB NAME</td>
    					<td>RATING NACIONAL</td>
    					<td>TITULO</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['id']."</td>
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['direccion']."</td>
                        <td>".$fila['lat']."</td>
                        <td>".$fila['lng']."</td>
    					<td>".$fila['pais']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $con->close();



?>