<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        
    </head>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
   
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    
    
    <link href="css/starrr.css" rel=stylesheet/>
    <script src="js/starrr.js"></script>
    
    
<body>
    <div class="container-fluid">
        <br/>
    <div class="col-md-2"></div>
     
        <div class="col-md-6" style="margin-left: 30px;">
               
    <label>Name</label>

<input type="text" name="name">
            </p>
            <hr/>
            Calificar: <span id="Estrellas"></span>
            <hr/>
           
        </div>
    
    <div class="col-md-2"></div>
    
    </div>
	<script>
   $('#Estrellas').starrr({
       rating:3,
       change:function(e,valor){
           alert(valor);
           
       }
       
   });
    
    </script>
</body>
</html>