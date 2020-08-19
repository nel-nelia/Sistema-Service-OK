
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

		<?php
            include("conexion.php");
        ?>

<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Registra tu establecimiento Ahora</h2>
	
	<form name="frmNotification" id="frmNotification" action="../php/agregarnotificacion.php" method="post">
			<label>NOMBRE REPRESENTANTE</label>
			<input type="text" class="ggg" name="autor" placeholder="NOMBRE REPRESENTANTE" required="">
			<label>APELLIDO REPRESENTANTE</label>
			<input type="text" class="ggg" name="apellidorepresentante" placeholder="APELLIDO REPRESENTANTE" required="">

		  <label>NOMBRE ESTABLECIMIENTO</label>
			<input type="text" class="ggg" name="nombreestablecimiento" placeholder="NOMBRE ESTABLECIMIENTO" required="">		
			<label>RUC BODEGA</label>
			<input type="text" class="ggg" name="ruc" placeholder="INGRESA RUC - BODEGA" required="">
	
			<label>CELULAR</label>
			<input type="text" class="ggg" name="phone" placeholder="CELULAR" required="">
			<label>E-MAIL</label>
			<input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="">
			<label>DIRECCION</label>
			<input type="text" class="ggg" name="direccion" placeholder="DIRECCION" required="">
			<div class="form-group">
      <label for="mensaje">MENSAJE </label>
      <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Mensaje" required></textarea>
      </div>
		 

			<h4><input type="checkbox" />Estoy de acuerdo con las Politicas de Seguridad</h4>
			
        <div class="form-group">
                  <input type="submit" name="add" id="btn-send" value="Enviar">
                </div>
		</form>
		
</div>
</div>
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
          url: "php/notificaciones.php",
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
