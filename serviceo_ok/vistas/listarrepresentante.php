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
    </ul>
</div>
</header>

<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- menu atras-->
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
        Informacion Representante
        </div>
     <div class="card shadow mb-4">
            

            <div class="card-body"><br>
              <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="30%" cellspacing="0">
                    <thead class="thead-dark">
                    <tr>
                       
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Establecimiento</th>
                        <th>RUC</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Autorizacion</th>
                        <th>Acciones </th>
                        
                        </tr>
                    </thead>


                  <?php
                      include ('conexion.php');     
                      $sql = "SELECT * FROM tbl_documentos
                      INNER JOIN datos ON datos.id=tbl_documentos.DatosID";
                      $query=mysqli_query($con, $sql);
                      while ($row= mysqli_fetch_array($query)){
                            $iddoc=$row['id_documento'];
                            $nombre=$row['autor'];
                            $direccion=$row['apellidorepresentante'];
                            $latitud=$row['nombreestablecimiento'];
                            $longitud=$row['ruc'];
                            $pais=$row['phone'];
                            $correo=$row['Email'];
                            $id=$row['nombre_archivo'];  

                  ?>
                        <tr>
                        <td><?php echo $nombre; ?></td>
						<td><?php echo $direccion; ?></td>
						<td><?php echo $latitud; ?></td>
                        <td><?php echo $longitud; ?></td>
                        <td><?php echo $pais; ?></td>
                        <td><?php echo $correo; ?></td>
                        <td><?php echo $id; ?></td>
                       
                        <td><a href="verpdf.php?id=<?php echo $row["id_documento"];?>" class="btn btn-sm warning"><i class="fa fa-eye"> </i> Ver</a></td>						
                
               

                        </tr>
                        <?php
                          }
                        ?>	
                  <tbody>
                  </tbody>
                </table>
            </div>
     </div>

        <footer class="panel-footer">
        <div class="row">
            
            <div class="col-sm-5 text-center">
            
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
<script src="confirmacion.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>