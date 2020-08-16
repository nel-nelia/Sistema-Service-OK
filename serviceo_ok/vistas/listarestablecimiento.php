<?php 
session_start();
$usuario = $_SESSION['username'];

if( !isset($usuario)){
	header ("location: ../index.php");
}else{
	
}
?>
<!DOCTYPE html>
<head>
<title>Service OK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        SERVICE OK
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

        <!-- menu-->
    <?php include 'menu.html';?>
        <!-- menu-->
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="principal.php">
                        <i class="fa fa-hand-o-left"></i>
                        <span>Atras</span>
                    </a>
                </li>
                
               
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Establecimiento
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Filtrar</button>                
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Buscar!</button>
          </span>
          
        </div>
      </div>
    </div>


    <div class="card shadow mb-4">
           

            <div class="card-body">

            <div class="col-6 p-2 d-flex justify-content-center">
                <button class="btn btn btn-primary" data-toggle="modal" data-target="#tipo"> Agregar</button>
             </div>
              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="30%" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Whatsapp</th>
                    <th>Delivery</th>
                    <th>Permiso</th>
                    <th>RUC</th>
                    <th>Coordenadas X</th>
                    <th>Coordenadas Y</th>
                    <th>Estado</th>
                    <th>Actividad</th>
                    <th>Representante</th>
                    <th>Acciones</th>
                        
                        </tr>
                    </thead>


                    <?php
                      include ('conexion.php');          
                      $sql = "SELECT * FROM Establecimiento";

                      $query=mysqli_query($con, $sql);

                      while ($row= MySQLI_fetch_array($query)){
                        $establecimeintoId=$row['EstablecimientoID'];
                        $nombre=$row['Nombre'];
                        $telefono=$row['Telefono'];
                        $whatsappURL=$row['WhatsappURL'];
                        $delivery=$row['Delivery'];
                        $permiso=$row['Permiso'];
                        $ruc=$row['RUC'];
                        $coordenadaX=$row['CoordenadaX'];
                        $coordenadaY=$row['CoordenadaY'];
                        $flagactivo=$row['FlagActivo'];
                        $actividadID=$row['ActividadID'];
                        $representanteID=$row['RepresentanteID'];
                  ?>
                        <tr>
                        <td><?php echo $establecimeintoId;?></td>
            
                        <td><?php echo $nombre;?></td>
                        <td><?php echo $telefono;?></td>
                        <td><?php echo $whatsappURL;?></td>
                        <td><?php echo $delivery;?></td>
                        <td><?php echo $permiso;?></td>
                        <td><?php echo $ruc;?></td>
                        <td><?php echo $coordenadaX;?></td>
                        <td><?php echo $coordenadaY;?></td>
                        <td><?php echo $flagactivo;?></td>
                        <td><?php echo $actividadID;?></td>
                        <td><?php echo $representanteID;?></td>
            
                        <td>
                        <form method="POST" action="modificarAtipo.php">
                        <input type="hidden" value="<?php echo $actividadid; ?>" name="id">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"> </i>&nbsp; Modificar</button><p></p>
                        </form> 
                         </td>
                        
                        
                        </tr>
                        <?php
                          }
                        ?>	
                  <tbody>
                  </tbody>
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

                                    <div class="form-group col-md-3">
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
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2020 Service OK. All rights reserved | Design by <a href="">C II</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
