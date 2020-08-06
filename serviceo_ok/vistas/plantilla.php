<!DOCTYPE html>
<html lang="es">
<head>

<title><?php echo COMPANY; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="vistas/css/bootstrap.min.css" >
<!-- //bootstrap-css -->

<link href="vistas/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
<link href="vistas/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="vistas/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="vistas/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="vistas/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="vistas/js/jquery2.0.3.min.js"></script>
<script src="vistas/js/raphael-min.js"></script>
<script src="vistas/js/morris.js"></script>

<style type="text/css">

html {  height: 100% }
body { height: 100%;}
#map_canvas { height: 2000%; margin-top: 81px; }
</style>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAHUMaudNC3W-f3XO7NXbXBJP7wytJF4SI&sensor=true"></script>
<script type="text/javascript">
function initialize()
{
var myOptions = {
center: new google.maps.LatLng(-18.0227011, -70.3175878,12),
zoom: 8,
mapTypeId: google.maps.MapTypeId.ROADMAP };
var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
}
</script>

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
    <!--  notification start -->
    <ul class="nav top-menu">
        
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
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
                <span class="username"></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="vistas/login.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="vistas/registration.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Registrate Aqui</span>
                    </a>
                </li>
                
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-bullhorn"></i>
                        <span>Sé el servicio más seguro</span>
                    </a>
                        
                    <ul class="sub">
                        <li><a href="basic_table.html">Manual de Bioseguridad</a></li>
                        <li><a href="responsive_table.html">Cuida a tu servicio</a></li>
                    </ul>
                   
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-envelope"></i>
                        <span>Preguntas Frecuentes</span>
                    </a>
                    
                </li>
                          
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a href="gallery.html">Gallery</a></li>
						<li><a href="404.html">404 Error</a></li>
                        <li><a href="registration.html">Registration</a></li>
                    </ul>
                </li>
                <li>
                    <a href="vistas/login.php">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
</section>
<body onload="initialize()">
<div id="map_canvas" style="width:100%; height:100%"></div>
</head>
    
</body>
<!--main content end-->
</section>
<script src="vistas/js/bootstrap.js"></script>
<script src="vistas/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="vistas/js/scripts.js"></script>
<script src="vistas/js/jquery.slimscroll.js"></script>
<script src="vistas/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="vistas/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->
</body>

</html>