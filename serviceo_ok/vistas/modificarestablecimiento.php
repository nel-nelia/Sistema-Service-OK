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
<?php include 'menu.php';?>
    <!-- menu-->

</header>
<!--header end-->
<!--sidebar start-->
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
	<div class="form-w3layouts">
        <!-- page start-->
        <!-- page start-->
       
        <section class="panel">
            <header class="panel-heading">
                Modificar Establecimiento
            </header>
            <div class="panel-body">

            <?php
                    include 'conexion.php' ; 
                    $EstablecimientoID =$_GET['id'];  

                    $datoscomp="SELECT * FROM establecimiento
                    INNER JOIN actividad ON actividad.ActividadID=establecimiento.ActividadID WHERE id='".$EstablecimientoID."' ";
                    $resp=mysqli_query($con,$datoscomp);
                    while ($rw=MySQLI_fetch_array($resp)) {
                    $establecimientoID=$rw['id'];
                    $nombre=$rw['nombre'];
                    $direccion=$rw['direccion'];
                    $Telefono=$rw['Telefono'];
                    $Delivery=$rw['Delivery'];
                    $RUC=$rw['RUC'];
                    $lat=$rw['lat'];
                    $lng=$rw['lng'];
                    $Distrito=$rw['Distrito'];
                    $Estado=$rw['Estado'];
                    $ActividadID=$rw['Nombrea'];
                        }
                        ?>

            <form action="../controladores/modificarestablecimiento.php" method="POST">
            <input type="hidden" value="<?php echo $establecimientoID; ?>" name="id"> 
               
                <div class="form-group">
                                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">Nombre</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="Nombre" value="<?php echo $nombre; ?>" >
                                </div>
                            </div>
                        </div><br><br><br>

                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">Direccion</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>" placeholder="Username">
                                </div>
                            </div>
                        </div><br><br>
                    
                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">Telefono</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" name="Telefono" value="<?php echo $Telefono; ?>"placeholder="Username">
                                </div>

                            </div>
                        </div><br><br>

                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">Delivery</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
                                    <select class="form-control" id="delivery" name="delivery">
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select> 
                                </div>

                            </div>
                        </div><br><br>

                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">RUC</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" name="ruc" value="<?php echo $RUC; ?>"placeholder="Username">
                                </div>

                            </div>
                        </div><br><br>

                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">Latitud</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" name="latitud" value="<?php echo $lat; ?>"placeholder="Username">
                                </div>

                            </div>
                        </div><br><br>

                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">Latitud</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" name="longitud" value="<?php echo $lng; ?>"placeholder="Username">
                                </div>

                            </div>
                        </div><br><br>

                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">Distrito</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
                                    <input type="text" class="form-control" name="Distrito" value="<?php echo $Distrito; ?>"placeholder="Username">
                                </div>

                            </div>
                        </div><br><br>

                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">Estado</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
                                
                                    <select class="form-control" id="estado" name="estado" value="<?php echo $Estado; ?>" >
                                              
                                                <option value="Activo">Activo</option>
                                                <option value="Inactivo">Inactivo</option>
                                            </select> 
                                </div>

                            </div>
                        </div><br><br>

                        <div class="form-group">
                            <label class="col-sm-3 control-label col-lg-3">Actividad</label>
                            <div class="col-lg-6">
                                <div class="input-group m-bot15">
                                    <span class="input-group-addon btn-white"><i class="fa fa-phone"></i></span>
                                    <select id="ActividadID" name="ActividadID"  class="form-control" value="<?php echo $ActividadID; ?>">
                                                            <?php
                                                            $sql="SELECT * FROM actividad";
                                                            $res=mysqli_query($con,$sql);
                                                            while ($rw= mysqli_fetch_array($res)){
                                                                echo "<option value=".$rw["ActividadID"].">".$rw["Nombrea"]."</option> ";
                                                            } 
                                                            ?>
                                    </select>
                                </div>

                            </div>
                        </div><br><br>

       
                    <br>
                    <br>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Guardar
                    </div>

                </div>

            </form>
            </div>
        </section>

        </div>
        </div>



        <!-- page end-->
        </div>
        </section>
        <!-- footer -->
                <div class="footer">
                    <div class="wthree-copyright">
                    <p>© 2020 Serviceok. All rights reserved | Design by <a href="">C II</a></p>
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

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "../php/notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>



</body>
</html>