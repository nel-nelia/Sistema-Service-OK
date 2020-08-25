<!DOCTYPE html>
<head>
<title>Service OK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <!-- Required meta tags -->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="css/tilos2.css" rel="stylesheet"> 

    <link rel="stylesheet" href="./css/pirata.css"> 

</head>

<div id="particles-js"></div>

<section class="contact-box">
        <div class="row no-gutters bg-dark">
            <div class="col-xl-5 col-lg-12 register-bg">
                <div class="position-absolute testiomonial p-4">
                    <h3 class="font-weight-bold text-light">:) Tu salud es primero</h3>
                    <p class="lead text-light">La nueva etapa de la revolución digital se aproxima.</p>
                </div>
            </div>

            <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6"> 
                    <h1 class="font-weight-bold mb-3">Documento de autorizacion</h1>
                   
                    <?php   
                        include 'conexion.php'; 
                        $iddato=$_GET['id'];   
                        $sql="SELECT * FROM datos  WHERE id='".$iddato."' ";
                                    $result=mysqli_query($con,$sql);
                                    $fila=mysqli_fetch_array($result);  
                    ?>
            <form method="POST" action="../controladores/guardarpdf.php" enctype="multipart/form-data">
            <input type="hidden" name="DatosID"  value="<?php echo $iddato;?>" >

             <div class="form-group mb-3">
                 <label class="font-weight-bold">NOMBRE<span class="text-danger">*</span></label>
			     <input type="text" class="form-control" class="ggg" name="titulo"  required="">
             </div>

             <div class="form-group mb-3">
             <label class="font-weight-bold">RUC<span class="text-danger">*</span></label>
      
             <input type="text"  name="name1"  value="<?php echo $fila["ruc"]; ?>" >
             </div>
             
                       
                  

                    <tr>
                        <td colspan="3"><input type="file" name="archivo"></td>
                    </tr> <br> <br>
                    <tr>
                        <td><input type="submit" value="subir" name="subir" class="btn btn-black width-100"></td>

                        
                        
                    </tr>
               

            </form>            
        </div>
	

	
                  
               
                </div>
            </div>
        </div>

</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 


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
  
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="js/app.js"></script>

</body>
</html>