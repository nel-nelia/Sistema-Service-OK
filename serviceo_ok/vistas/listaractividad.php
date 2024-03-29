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
<!-- //swetalert -->
<link rel="stylesheet" href="plugins/dist/sweetalert2.min.css">
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

<?php include 'head.php';?> 

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
    </div>
</aside>

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
        Listar Actividad
        </div>
        <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        
             
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
                        <th>NOMBRE</th>
                        <th>ESTADO</th>
                        <th>ACCIONES</th>
                        
                        </tr>
                    </thead>


                  <?php
                      include ('conexion.php');     

                      $sql = "SELECT * FROM actividad";
                      $query=mysqli_query($con, $sql);
                      while ($row= mysqli_fetch_array($query)){           
                        $actividadid=$row['ActividadID'];
                        $nombre=$row['Nombrea'];
                        $estado=$row['Estado'];
                  ?>
                        <tr>
                        <td><?php echo $actividadid;?></td>
                        <td><?php echo $nombre;?></td>
                        <td><?php echo $estado;?></td>
                        <td>
                        <a href="modificaractividad.php?id=<?php echo $row["ActividadID"];?>" class="btn btn-sm btn-success"> <i class="fa fa-pencil-square-o"> </i>Editar</a>
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
         <div class="modal-dialog modal-sm" role="document">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agregar Actividad</h5>
                <button class="close" type="button"  data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
                    <form action="../controladores/guardaractividad.php" method="POST"> 
                        <div class="modal-body ">  

                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label  for="selectSm">Nombre</label>
                                    <input type="text" id="Nombre" name="Nombre" class="form-control" >
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="selectSm">Estado</label>
                                    <select class="form-control" id="Estado" name="Estado">
                                                    <option selected>Elegir...</option>
                                                    <option value="Activo">Activo</option>
                                                    <option value="Inactivo">Inactivo</option>
                                                </select> 
                                </div> <br><br><br><br><br><br>                     
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
                <small class="text-muted inline m-t-sm m-b-sm"></small>
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


</section>
<script src="confirmacion.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>
<script src="plugins/dist/sweetalert2.all.min.js"></script>


</body>
</html>
