

<?php 

  // Agregamos el nombre y dirección a la ventana de información de cada marcador, puedes agregar la información que desees, nosotros agregaremos 'nombre' y 'direccion' 

  $result = mysqli_query($con, "SELECT * FROM establecimiento");
  if($result->num_rows > 0){
    
    while($row = $result->fetch_assoc()){ ?>
    
    ['<div class="info_content" >' + '<h3><?php echo $row['nombre']; ?></h3>' + '<p> <b> Direccion: </b> <?php echo $row['direccion']; ?></p>' + '</h3>' + '<p> <b>Telefono:</b> <?php echo $row['Telefono']; ?></p>' + '<p> <b>Delivery:</b> <?php echo $row['Delivery']; ?></p>' + '</div> <div class="info_content" > <a id="fa-whatsapp:before" target="_blanck" href="https://api.whatsapp.com/send?phone=<?php echo $row['Telefono']; ?>&amp;text=!&nbsp;Hola&nbsp;quiero&nbsp;hacer&nbsp;un&nbsp;pedido?"> <i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></a></div> <div class="info_content" > <a id="fa-whatsapp:before" target="_blanck" href="https://api.whatsapp.com/send?phone=>" data-toggle="modal" data-target="modal_calificacion"> <i class="fa fa-star fa-3x" aria-hidden="true"></i></a></div> ' ] , 
    
    <?php }
  }


?>




