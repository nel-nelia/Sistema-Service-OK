<html>
<head>
   <meta charset="utf-8">
   <title>Service OK</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
   
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    
  
<link rel="stylesheet" href="css/font.css" type="text/css"/>  
<link href="css/starrr.css" rel=stylesheet/>
    <script src="js/starrr.js"></script>

   <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>

<script>
$(document).ready(function(){
    $('input.star').rating();
});
</script>

</head>
<body>
   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <h3>¿Como estuvo el servicio solicitado?</h3>
           </div>

           <div id="centro" class="modal-body">


           <form id="form"  action="plantilla.php" method="POST"> 
            <center>

            <div class="row">
        <div id="content" class="col-lg-12">
            <form action="index.php" method="post">
                <div class="star_content">
                    <input name="rate" value="1" type="radio" class="star"/> 
                    <input name="rate" value="2" type="radio" class="star"/> 
                    <input name="rate" value="3" type="radio" class="star"/> 
                    <input name="rate" value="4" type="radio" class="star" checked="checked"/> 
                    <input name="rate" value="5" type="radio" class="star"/>
                </div>
                <button type="submit" name="submitRatingStar" class="btn btn-primary btn-sm">Enviar</button>
            </form>

            Calificar: <span id="Estrellas"></span>
        </div>
    </div>
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