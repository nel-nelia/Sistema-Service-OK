<html>
<head>
   <meta charset="utf-8">
   <title>Mostrar Ventane Modal de forma Automático</title>

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
              <h3>SERVICE OK</h3>
           </div>
           <div class="modal-body">


           <form id="form"  action="../vistas/google_map.php" method="POST">

            <div class="form-group">
                        <label class="col-sm-3 control-label col-lg-3">Correo Electronico:</label>
                        <div class="col-lg-6">
                            <div class="input-group m-bot15">
                                <span class="input-group-addon btn-white"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="name">
                            </div>

                        </div>
            </div>

             <div  class="g-recaptcha" data-sitekey="6Lc1trwZAAAAAF2bw2a3moWEsl5hmIb8CeXVoKgW"></div><br><br>
            <br>
       <input type="submit" name="login" class="btn btn-info" value="Confirmar">
			
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
			
		        //	if($arr['success'])
			    //{
				//echo '<h2>Gracias</h2>';
				//} else {
				//echo '<h3>Error al comprobar Captcha </h3>';
			    //}
		}
	}
?>
</html>
