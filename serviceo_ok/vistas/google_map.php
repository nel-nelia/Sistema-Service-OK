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
<link rel="stylesheet" href="css/jquery.gmaps.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">
      #mapa {
            height: 100vh;
      }
      .h2s {
        font-size: 3vh;
      }
    </style> 

</head>
<body>

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
</div>
</div>
<div class="top-nav clearfix">
    <ul class="nav pull-right top-menu">

	<li>
		<div class="demo-content">
            <div id="notification-header">
              <div style="position:relative">
                <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="images/icono.png" /></button>
                <div id="notification-latest"></div>
              </div>          
			</div>
		</div>
		      <?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
          <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
		</li>
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
		</li>
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
    </ul>
    
</div>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHUMaudNC3W-f3XO7NXbXBJP7wytJF4SI&callback=initMap"></script>

 <!-- footer -->
 <main role="main">
 <body> 

<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <div class="collapse navbar-collapse" id="navbarsExample07">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
       
      <li class="nav-item">
      </li>
      <li class="nav-item">   
      </li> 
      </ul>
      <form name="bencc" method="get"  id="bencc" class="form-inline mt-2 mt-md-0" target="_blank" >
       
      <h2 class="h2s">SERVICE OK</h2>
      </form>
    </div>
  </div>
</nav>
</header>
      <main role="main">
        <div class="card shadow mb-4">
           <div class="card-body">
             <div class="row">
            <div class="col-md-12">
              <div id="mapa"></div>             
              </div>
          </div>
          <div class="table-responsive">
            <div class="row mt-3">

            <div class="col-md-12">
  
            </div>    
           </div> 

           </br> 
         </div>
        </div>
      </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHUMaudNC3W-f3XO7NXbXBJP7wytJF4SI&callback=initMap"></script>

    <script type="text/javascript">

navigator.geolocation.getCurrentPosition(function(location) {
   console.log(location.coords.latitude);
   console.log(location.coords.longitude);

   
   var center = {lat: location.coords.latitude, lng: location.coords.longitude};

   function initMap() {
     var map;
     var bounds = new google.maps.LatLngBounds();
     var mapOptions = {
         mapTypeId: 'roadmap'
     };

     map = new google.maps.Map(document.getElementById('mapa'), {
         center: center,
         mapOptions
     });

     map.setTilt(50);

     // Crear múltiples marcadores desde la Base de Datos 
     var marcadores = [
         <?php include('../php/marcadores.php'); ?>
     ];
     // Creamos la ventana de información para cada Marcador
     var ventanaInfo = [
         <?php include('../php/info_marcadores.php'); ?>
        
     ];

     var marker = new google.maps.Marker({
      position: {lat: location.coords.latitude, lng: location.coords.longitude},
      map:map,
      title: 'Ubicacion'

   });

     // Creamos la ventana de información con los marcadores 
     var mostrarMarcadores = new google.maps.InfoWindow(),
         marcadores, i;

     // Colocamos los marcadores en el Mapa de Google 
     for (i = 0; i < marcadores.length; i++) {
         var position = new google.maps.LatLng(marcadores[i][1], marcadores[i][2]);
         bounds.extend(position);
         marker = new google.maps.Marker({
             position1: {lat: location.coords.latitude, lng: location.coords.longitude},
             position: position,
             map: map,

             title: marcadores[i][0],
             icon: '../vistas/images/casa.png'
       
         });  

         // Colocamos la ventana de información a cada Marcador del Mapa de Google 
         google.maps.event.addListener(marker, 'click', (function(marker, i) {
             return function() {
                 mostrarMarcadores.setContent(ventanaInfo[i][0]);
                 mostrarMarcadores.open(map, marker);
             }
         })(marker, i));

         // Centramos el Mapa de Google para que todos los marcadores se puedan ver 
         map.fitBounds(bounds);
     }

     // Aplicamos el evento 'bounds_changed' que detecta cambios en la ventana del Mapa de Google, también le configramos un zoom de 14 
     var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
         this.setZoom(16);
         google.maps.event.removeListener(boundsListener);
     });
   }
   initMap();

 // Lanzamos la función 'initMap' para que muestre el Mapa con Los Marcadores y toda la configuración realizada 
 google.maps.event.addDomListener(window, 'load', initMap);
});
</script>   
</body>
</script>
</section>
</section>
<div class="footer">
			<div class="wthree-copyright">
			  <p>© 2020 Service OK. All rights reserved | Construcción II <a href="">C II</a></p>
			</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/jquery.scrollTo.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.gmaps.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
