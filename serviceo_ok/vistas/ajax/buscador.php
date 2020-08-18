<?php

	require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
	if($action == 'ajax'){
		// escaping, additionally removing everything that could be (html/javascript-) code
         $q = mysqli_escape_string($con,(strip_tags(strtoupper($_REQUEST['q']), ENT_QUOTES)));
		 $aColumns = array('nombre', 'direccion', 'lat', 'lng', 'pais');//Columnas de busqueda
		 $sTable = "google_maps_php_mysql";
		 $sWhere = ""; 
		if ( $_GET['q'] != "" )
		{
			$sWhere = "WHERE (";
			for ( $i=0 ; $i<count($aColumns) ; $i++ )
			{
				$sWhere .= $aColumns[$i]." LIKE '%".$q."%' OR ";
			}
			$sWhere = substr_replace( $sWhere, "", -3 );
			$sWhere .= ')';
		}
		include 'paginacion.php'; //include pagination file
		//pagination variables
		$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
		$per_page = 15; //how much records you want to show
		$adjacents  = 4; //gap between pages after number of adjacents
		$offset = ($page - 1) * $per_page;
		//Count the total number of row in your table*/
		$count_query   = mysqli_query($con, "SELECT count(*) AS numrows FROM $sTable  $sWhere");
		$row= mysqli_fetch_array($count_query);
		$numrows = $row['numrows'];
		$total_pages = ceil($numrows/$per_page);
		$reload = '../admin.php';
		//main query to fetch the data
		$sql="SELECT * FROM  $sTable $sWhere LIMIT $per_page OFFSET $offset";
		$query = mysqli_query($con, $sql);
		
		//loop through fetched data
		if ($numrows>0){
			
            ?>

    <div class="panel panel-default">
        
     <br>
     <div class="card shadow mb-4">
            <div class="card-body">
            <div class="col-6 p-2 d-flex justify-content-center">
                <button class="btn btn btn-primary" data-toggle="modal" data-target="#tipo"> Agregar</button>
             </div>
              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="30%" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Direccion</th>
                        <th>Latitud</th>
                        <th>Longitud </th>
                        <th>Departamento </th>
                        
                        </tr>
                    </thead>

                    <?php
                        while ($row=mysqli_fetch_array($query)){

                            $nombre=$row['nombre'];
                            $direccion=$row['direccion'];
                            $latitud=$row['lat'];
                            $longitud=$row['lng'];
                            $pais=$row['pais'];
                            $id=$row['id'];

                    ?>

                    <tr>
						<td><?php echo $nombre; ?></td>
						<td><?php echo $direccion; ?></td>
						<td><?php echo $latitud; ?></td>
                        <td><?php echo $longitud; ?></td>
                        <td><?php echo $pais; ?></td>
						<td> 
                        <a href="./modificaractividad.php?id=<?php echo $row["id"];?>" class="btn btn-sm btn-success"> <i class="fa fa-pencil-square-o"> </i>Editar</a>
                        <a href="../controladores/eliminaractividad.php?id=<?php echo $row["ActividadID"];?>" class="btn btn-sm btn-danger"><i class="fa fa-trash-o"> </i> Eliminar</a>						
						</td>
                    
                        </tr>
                        <?php
                          }
                        ?>	
                 
                </table>
            </div>
     </div>

     <div class="modal fade bd-example-modal-sm" id="tipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Establecimiento</h5>
                            <button class="close" type="button"  data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button>
                          </div>
                          <form action="../controladores/guardarestablecimiento.php" method="POST">
                            <div class="modal-body ">  
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="selectSm">Establecimiento</label>
                                        <input type="text" id="registrousuarioID" name="registrousuarioID"  class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="selectSm">Direccion</label>
                                        <input type="text" id="direccion" name="direccion"  class="form-control">
                                    </div>

                               <!--     <div class="form-group col-md-6">
                                        <label for="selectSm">Whatsapp</label>
                                        <select id="whatsapp" name="whatsapp"  class="form-control">
                                                    <?php
                                                    $sql="SELECT * FROM registrousuario";
                                                    $res=mysqli_query($con,$sql);
                                                    while ($rw= mysqli_fetch_array($res)){
                                                    echo "<option value=".$rw["RegistrousuarioID"].">".$rw["phone"]."</option> ";
                                                    } 
                                                    ?>
                                        </select>
                                    </div> -->

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">Latitud</label>
                                        <input type="text" id="latitud" name="latitud"  class="form-control">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">Longitud</label>
                                        <input type="text"  id="longitud" name="longitud" class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="selectSm">Departamento</label>
                                        <input type="text" id="Departamento" name="Departamento"  class="form-control">
                                    </div>

                                    
                                  <!--                      
                                    <div class="form-group col-md-6">
                                        <label for="selectSm">Estado</label>
                                        <select class="form-control" id="Estado" name="Estado">
                                                        <option selected>Elegir...</option>
                                                        <option value="Activo">Activo</option>
                                                        <option value="Inactivo">Inactivo</option>
                                        </select> 
                                    </div> -->                                 

                                </div>
                      
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <button class="btn btn-primary"  type="submit">Guardar</button>
                            </div>
                       </form>

                      </div>
                </div>       
              </div> 

        <footer class="panel-footer">
        <div class="row">
            
            <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
            </div>
        </div>
        </footer>
    </div>
			<?php
		}
	}
?>


