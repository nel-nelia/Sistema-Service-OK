<html>
<head>
   <meta charset="utf-8">
   <title>Bienvenido - Service OK</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
   <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>

<script src='https://www.google.com/recaptcha/api.js'></script>


</head>
<body>
   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <h3>Bienvenido !!</h3>
           </div>
           <div id="centro" class="modal-body">

           <form id="form"  action="vistas/plantilla.php" method="POST">
            <center>

             <div  class="g-recaptcha" data-sitekey="6Lc1trwZAAAAAF2bw2a3moWEsl5hmIb8CeXVoKgW"></div><br><br>
          
            <input type="submit" name="login" class="btn btn-danger" value="Confirmar">
            </center>
        </form>

       </div>
      </div>
   </div>
</div>
</body>

<?php
	
	if(!empty($_POST)){
		
		$name = $_POST['name'];
		$captcha = $_POST['g-recaptcha-response'];
		
		$secret = '6Lc1trwZAAAAAB2-glo_aMMgvWr2I9IclMLJe3ew';
		
		if(!$captcha){
 
			echo "Por favor verifica el captcha";
			
			} else {
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);	
		}
	}
?>
</html>
