<?php 
session_start();
$usuario = $_SESSION['username'];

if( !isset($usuario)){
	header ("location: ../index.php");
}else{
	
}
?>
<!DOCTYPE html>
<html lang="es">
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
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>

<link rel="icon" href="http://collectivecloudperu.com/blogdevs/wp-content/uploads/2017/09/cropped-favicon-1-32x32.png">
<!-- Bootstrap core CSS -->



<!-- mi pan mi pan mi pan mi pan -->

<link href="css/estilos.css" rel="stylesheet">

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
<div class="nav notify-row" id="top_menu">
<div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
                 
        </ul>
		<?php
            include("conexion.php");
        ?>             
		<div class="demo-content">
            <div id="notification-header">
              <div style="position:relative">
                <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="images/rayo.png" /></button>
                <div id="notification-latest"></div>
              </div>          
			</div>
		</div>
		
		<?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
          <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
           
</div>
</div>

<div class="top-nav clearfix">

    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
	

	<li>
		

		</li>
		
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
		</li>
		
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
               <?php echo " $usuario"?>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="../logica/salir.php"><i class="fa fa-key"></i> Log Out</a></li>
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
               
                
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-building-o"></i>
                        <span>Gestión Actividad</span>
                    </a>
                    <ul class="sub">
                        <li><a href="listaractividad.php">Listar</a></li>
                        <li><a href="agregaractividad.php">Agregar</a></li>
						<li><a href="pdf.php">Reporte</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Gestión Establecimiento</span>
                    </a>
                    <ul class="sub">
                        <li><a href="listarestablecimientos.php">Listar</a></li>
                        <li><a href="agregarestablecimiento.php">Agregar</a></li>
						
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-question-circle"></i>
                        <span>Consultar Establecimiento</span>
                    </a>
                    <ul class="sub">
                        <li><a href="mail.html">Inbox</a></li>
                        <li><a href="mail_compose.html">Compose Mail</a></li>
                    </ul>
                </li>
               
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-eye"></i>
                        <span>Mostrar Establecimiento</span>
                    </a>
                    <ul class="sub">
                        <li><a href="google_map.php">Google Map</a></li>
                        <li><a href="vector_map.php">Vector Map</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-unlock-alt"></i>
                        <span>Gestionar Administrador</span>
                    </a>
                    <ul class="sub">
                        <li><a href="vistadministrador.php">Listar Administrador</a></li>
						<li><a href="404.html">404 Error</a></li>
						
                        <li><a href="registration.html">Registration</a></li>
                    </ul>
                </li>
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-unlock-alt"></i>
                        <span>Gestionar Usuario</span>
                    </a>
                    <ul class="sub">
                        <li><a href="vistausuario.php">Listar Usuario</a></li>
						<li><a href="404.html">404 Error</a></li>
						
                    </ul>
                </li>
                
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-eye"> </i>
					</div>
					 <div class="col-md-8 market-update-left">
					 <h4>Visitors</h4>
					<h3>13,500</h3>
					<p>Other hand, we denounce</p>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-1">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-users" ></i>
					</div>
					<div class="col-md-8 market-update-left">
					<h4>Usuarios</h4>
						<h3>
						<?php
						require 'conexion.php';
						$sql="SELECT * FROM RegistroUsuario";
						$total =0;
						echo $total;
						?></h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-3">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-usd"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Sales</h4>
						<h3>1,500</h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-4">
					<div class="col-md-4 market-update-right">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</div>
					<div class="col-md-8 market-update-left">
						<h4>Orders</h4>
						<h3>1,500</h3>
						<p>Other hand, we denounce</p>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
									<h3>Visitor Statistics</h3>
										<div class="toolbar">
											
											
										</div>
								</header>
								<div class="agileits-box-body clearfix">
									<canvas id="chart">
								</div>
							</div>
						</div>
	<!--//agileinfo-grap-->

				</div>
			</div>
		</div>
	
	
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2020 Service OK. All rights reserved | Construcción II <a href="http://w3layouts.com">W3layouts</a></p>
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
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
			
			],
			lineColors:['#eb6f6f','#926383','#eb6f6f'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->


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
