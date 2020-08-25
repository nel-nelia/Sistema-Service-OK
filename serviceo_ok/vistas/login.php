
<!DOCTYPE html>
<head>
	<title>Service OK</title>
	<link rel="stylesheet" type="text/css" href="css/tuti.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


</head>
<body>
<div id="particles-js"></div>
	<img class="wave" src="images/wave.png">
	<div class="container">
		<div class="img">
			<img src="images/pirr.png">
		</div>
		<div class="login-content">
		<form action="../logica/loguear.php" method="post">
				<img src="images/avatar.svg">
				<h2 class="title">Bienvenido</h2>	
			<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
					  </div>
					  <div class="div">
           		   		<h5>Usuario</h5>
			<input type="text" class="input" name="usuario" placeholder="" required="">
			</div>
		</div>
		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
			<input type="password" class="input" name="clave" placeholder="" required="">
			</div>
         </div>
		<div class="clearfix"></div>
				<input class="btn" type="submit"></input>
		</form>
</div>
</div>
<script type="text/javascript" src="js/tuti.js"></script>



</body>
</html>
