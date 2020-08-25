
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


    <link rel="stylesheet" href="css/estrella.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


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
<style type="text/css">
.modal-backdrop
{
    background-image: url('images/tutu.png');
    opacity:0.5 !important;
}



</style>

</head>
<body>

   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <h1><b>¿Como estuvo el servicio solicitado?</b></h1>
           </div>
           <?php   
                        include 'conexion.php'; 
                        $id=$_GET['id'];  
                        $sql="SELECT * FROM establecimiento  WHERE id='".$id."' ";
                                    $result=mysqli_query($con,$sql);
                                    $fila=mysqli_fetch_array($result);
                    ?>

           <div id="centro" class="modal-body">

           <form action="calificar.php" method="POST"> 

           <input type="hidden" name="name"  value="<?php echo $id;?>" >
           <input type="hidden" name="rate" id="rating-value">

                <div class="rating-box">

                   
   
 
            <input type="text"  name="name1"  value="<?php echo $fila["nombre"]; ?>" >
                   

                        <div class="ratings">
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                            <span class="fa fa-star-o"></span>
                        </div>
                
                        <div><input type="submit" name="add"></div>
             </form>    
 </div>

<script src="js/tutiscript.js"></script>

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